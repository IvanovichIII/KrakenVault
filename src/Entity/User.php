<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`Usuarios`')]
class User implements PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $role = "user";

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $fecha_registro;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $ultimo_acceso = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $avatar_path = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $home_path = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $data_path = null;

    /**
     * @var Collection<int, Archivo>
     */
    #[ORM\OneToMany(targetEntity: Archivo::class, mappedBy: 'user_id', orphanRemoval: true)]
    private Collection $archivos;

    /**
     * @var Collection<int, Historial>
     */
    #[ORM\OneToMany(targetEntity: Historial::class, mappedBy: 'user_id', orphanRemoval: true)]
    private Collection $historials;

    /**
     * @var Collection<int, Repositorios>
     */
    #[ORM\OneToMany(targetEntity: Repositorios::class, mappedBy: 'user_id', orphanRemoval: true)]
    private Collection $repositorios;

    public function __construct()
    {
        $this->archivos = new ArrayCollection();
        $this->historials = new ArrayCollection();
        $this->fecha_registro = new \DateTime();
        $this->repositorios = new ArrayCollection();
    }

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->password;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro(\DateTimeInterface $fecha_registro): static
    {
        $this->fecha_registro = $fecha_registro;

        return $this;
    }

    public function getUltimoAcceso(): ?\DateTimeInterface
    {
        return $this->ultimo_acceso;
    }

    public function setUltimoAcceso(?\DateTimeInterface $ultimo_acceso): static
    {
        $this->ultimo_acceso = $ultimo_acceso;

        return $this;
    }

    public function getAvatarPath(): ?string
    {
        return $this->avatar_path;
    }

    public function setAvatarPath(?string $avatar_path): static
    {
        $this->avatar_path = $avatar_path;

        return $this;
    }

    public function getHomePath(): ?string
    {
        return $this->home_path;
    }

    public function setHomePath(?string $home_path): static
    {
        $this->home_path = $home_path;

        return $this;
    }

    public function getDataPath(): ?string
    {
        return $this->data_path;
    }

    public function setDataPath(?string $data_path): static
    {
        $this->data_path = $data_path;

        return $this;
    }

    /**
     * @return Collection<int, Archivo>
     */
    public function getArchivos(): Collection
    {
        return $this->archivos;
    }

    public function addArchivo(Archivo $archivo): static
    {
        if (!$this->archivos->contains($archivo)) {
            $this->archivos->add($archivo);
            $archivo->setUserId($this);
        }

        return $this;
    }

    public function removeArchivo(Archivo $archivo): static
    {
        if ($this->archivos->removeElement($archivo)) {
            // set the owning side to null (unless already changed)
            if ($archivo->getUserId() === $this) {
                $archivo->setUserId(null);
            }
        }

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
            $historial->setUserId($this);
        }

        return $this;
    }

    public function removeHistorial(Historial $historial): static
    {
        if ($this->historials->removeElement($historial)) {
            // set the owning side to null (unless already changed)
            if ($historial->getUserId() === $this) {
                $historial->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Repositorios>
     */
    public function getRepositorios(): Collection
    {
        return $this->repositorios;
    }

    public function addRepositorio(Repositorios $repositorio): static
    {
        if (!$this->repositorios->contains($repositorio)) {
            $this->repositorios->add($repositorio);
            $repositorio->setUserId($this);
        }

        return $this;
    }

    public function removeRepositorio(Repositorios $repositorio): static
    {
        if ($this->repositorios->removeElement($repositorio)) {
            // set the owning side to null (unless already changed)
            if ($repositorio->getUserId() === $this) {
                $repositorio->setUserId(null);
            }
        }

        return $this;
    }
}
