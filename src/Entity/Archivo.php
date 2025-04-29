<?php

namespace App\Entity;

use App\Repository\ArchivoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;


#[ORM\Entity(repositoryClass: ArchivoRepository::class)]
#[ORM\Table(name: '`Archivos`')]
class Archivo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'archivos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $filename = null;

    #[ORM\Column(length: 255)]
    private ?string $filepath = null;

    #[ORM\Column]
    private ?int $filesize = null;

    #[ORM\Column(length: 255)]
    private ?string $filetype = null;
    
    #[ORM\Column(length: 255)]
    private ?string $filehash = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $upload_date = null;

    /**
     * @var Collection<int, Historial>
     */
    #[ORM\OneToMany(targetEntity: Historial::class, mappedBy: 'file_id')]
    private Collection $historials;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'archivos')]
    private ?self $id_padre = null;

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'id_padre')]
    private Collection $archivos;

    #[ORM\ManyToOne(inversedBy: 'archivos')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Repositorios $repo_id = null;

    #[ORM\Column]
    private ?int $repoVersion = null;

    public function __construct()
    {
        $this->historials = new ArrayCollection();
        $this->archivos = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFilepath(): ?string
    {
        return $this->filepath;
    }

    public function setFilepath(string $filepath): static
    {
        $this->filepath = $filepath;

        return $this;
    }

    public function getFilesize(): ?int
    {
        return $this->filesize;
    }

    public function setFilesize(int $filesize): static
    {
        $this->filesize = $filesize;

        return $this;
    }

    public function getFiletype(): ?string
    {
        return $this->filetype;
    }

    public function setFiletype(string $filetype): static
    {
        $this->filetype = $filetype;

        return $this;
    }

    public function getFilehash(): ?string
    {
        return $this->filehash;
    }

    public function setFilehash(string $filehash): static
    {
        $this->filehash = $filehash;

        return $this;
    }

    public function getUploadDate(): ?\DateTimeInterface
    {
        return $this->upload_date;
    }

    public function setUploadDate(\DateTimeInterface $upload_date): static
    {
        $this->upload_date = $upload_date;

        return $this;
    }

    /**
     * @return Collection<int, Historial>
     */
    public function getHistorials(): Collection
    {
        return $this->historials;
    }

    public function addHistorial(Historial $historial): static
    {
        if (!$this->historials->contains($historial)) {
            $this->historials->add($historial);
            $historial->setFileId($this);
        }

        return $this;
    }

    public function removeHistorial(Historial $historial): static
    {
        if ($this->historials->removeElement($historial)) {
            // set the owning side to null (unless already changed)
            if ($historial->getFileId() === $this) {
                $historial->setFileId(null);
            }
        }

        return $this;
    }

    public function getIdPadre(): ?self
    {
        return $this->id_padre;
    }

    public function setIdPadre(?self $id_padre): static
    {
        $this->id_padre = $id_padre;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getArchivos(): Collection
    {
        return $this->archivos;
    }

    public function addArchivo(self $archivo): static
    {
        if (!$this->archivos->contains($archivo)) {
            $this->archivos->add($archivo);
            $archivo->setIdPadre($this);
        }

        return $this;
    }

    public function removeArchivo(self $archivo): static
    {
        if ($this->archivos->removeElement($archivo)) {
            // set the owning side to null (unless already changed)
            if ($archivo->getIdPadre() === $this) {
                $archivo->setIdPadre(null);
            }
        }

        return $this;
    }

    public function getRepoId(): ?Repositorios
    {
        return $this->repo_id;
    }

    public function setRepoId(?Repositorios $repo_id): static
    {
        $this->repo_id = $repo_id;

        return $this;
    }

    public function getRepoVersion(): ?int
    {
        return $this->repoVersion;
    }

    public function setRepoVersion(int $repoVersion): static
    {
        $this->repoVersion = $repoVersion;

        return $this;
    }
}
