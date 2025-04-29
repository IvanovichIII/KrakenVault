<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\FtpService;
use FluentFTP\FtpClient;
use App\Entity\Archivo;
use App\Repository\ArchivoRepository;
use App\Entity\Repositorios;
use App\Repository\RepositoriosRepository;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use ZipArchive;

final class FtpController extends AbstractController
{
    private FtpService $ftpService;

    public function __construct(FtpService $ftpService)
    {
        $this->ftpService = $ftpService;
    }

    #[Route('/ftp/upload', name: 'ftp_upload', methods: ['POST'])]
    public function upload(Request $request, SessionInterface $session, UserRepository $userRepository, ArchivoRepository $archivoRepository, RepositoriosRepository $repositoriosRepository, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $files = $request->files->all()['files'] ?? [];
            $filePaths = $request->get('file_paths', []);
            if (empty($files)) {
                echo "No se subieron archivos.";
                return new Response('No se subieron archivos.', 400);
            }
            $repo = $repositoriosRepository->findOneBy([
                'Nombre' => $request->get('repo'),
                'user_id' => $userRepository->find($session->get('user_id'))
            ]);
            $repo->setVersion($repo->getVersion() + 1);
            $entityManager->persist($repo);
            $entityManager->flush();
            foreach ($files as $key => $file) {
                $path = $session->get('user_home')."/".$request->get('repo')."/".dirname($filePaths[$key]);
                if (!$this->ftpService->directoryExists($path)) {
                    $this->ftpService->createDirectory($path);
                    $dir = new Archivo();
                    $dir->setUserId($userRepository->findByUsername($session->get('user_user')));
                    $partes = explode('/', dirname($filePaths[$key]));
                    $nombreCarpeta = array_pop($partes);
                    $dir->setFilename($nombreCarpeta);
                    $dir->setFilepath($path);
                    $dir->setFilesize(0);
                    $dir->setFiletype("dir");
                    $dir->setUploadDate(new \DateTime());
                    $dir->setFilehash("");
                    $fullDirPath = $session->get('user_home') . "/" . $request->get('repo') . "/" . dirname($filePaths[$key]);
                    $parentPath = dirname($fullDirPath);
                    if ($parentPath === $session->get('user_home')."/".$request->get('repo')) {
                        $padre = null;
                    } else {
                        $padre = $archivoRepository->findOneBy(['filepath' => $parentPath]);
                    }
                    $dir->setIdPadre($padre);
                    $dir->setRepoId($repo);
                    $dir->setRepoVersion($repo->getVersion());
                    $entityManager->persist($dir);
                    $entityManager->flush();
                }
                $content = file_get_contents($file->getRealPath());
                $filepath = $session->get('user_home') . "/" . $request->get('repo') . "/" . $filePaths[$key];
                $archivos = $archivoRepository->findBy(['filepath' => $filepath]);
                if (!empty($archivos)) {
                    $archivoMasReciente = array_reduce($archivos, function ($carry, $item) {
                        return ($carry === null || $item->getRepoVersion() > $carry->getRepoVersion()) ? $item : $carry;
                    });
                    if (hash('sha256', $content) === $archivoMasReciente->getFilehash()) {
                        continue;
                    }
                }
                $this->ftpService->uploadFile($session->get('user_home')."/".$request->get('repo')."/".$filePaths[$key], $content);
                $arch = new Archivo();
                $arch->setUserId($userRepository->findByUsername($session->get('user_user')));
                $arch->setFilename($file->getClientOriginalName());
                $arch->setFilepath($session->get('user_home')."/".$request->get('repo')."/".$filePaths[$key]);
                $arch->setFilesize($file->getSize());
                $arch->setFiletype($file->getClientMimeType());
                $arch->setUploadDate(new \DateTime());
                $arch->setFilehash(hash('sha256', $content));
                $arch->setIdPadre($archivoRepository->findOneBy(['filepath' => $session->get('user_home')."/".$request->get('repo')."/".dirname($filePaths[$key])]));
                $arch->setRepoId($repo);
                $arch->setRepoVersion($repo->getVersion());
                $entityManager->persist($arch);
                $entityManager->flush();
                /*$hist = new Historial();
                $hist->setArchivoId($arch);
                $hist->setAccion("upload");
                $hist->setFecha(new \DateTime());
                $hist->setUserId($userRepository->findByUsername($session->get('user_user')));
                $hist->setRepoId($repo);
                $hist->setRepoVersion($repo->getVersion());
                $entityManager->persist($hist);
                $entityManager->flush();*/
            }
            return new Response('Todo listo', 200);
        }
        return new Response('Método incorrecto.', 405);
    }

    #[Route('/ftp/download', name: 'ftp_download', methods: ['POST'])]
    public function downloadFolder(Request $request, SessionInterface $session): Response
    {
        $repo = $request->request->get('repo');
        $basePath = $session->get('user_home');
        $folderPath = $basePath . '/' . $repo;
    
        if (!$this->ftpService->directoryExists($folderPath)) {
            return new Response('El directorio no existe.', 404);
        }
        $zipPath = tempnam(sys_get_temp_dir(), 'repo_') . '.zip';
        $zip = new ZipArchive();
        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return new Response('No se pudo crear el archivo ZIP.', 500);
        }
        $this->ftpService->addToZip($zip, $folderPath, $basePath);
        $zip->close();
        $response = new BinaryFileResponse($zipPath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $repo . '.zip'
        );
        $response->deleteFileAfterSend(true);
        return $response;
    }

private function addFolderToZip(ZipArchive $zip, string $folderPath, string $basePath): void
{
    $files = $this->ftpService->listDirectoryContents($folderPath);
    
    foreach ($files as $file) {
        $fullPath = $folderPath . '/' . $file['name'];
        $relativePath = ltrim(substr($fullPath, strlen($basePath)), '/');
        
        if ($file['type'] === 'dir') {
            // Para directorios, agregamos una entrada y procesamos recursivamente
            $zip->addEmptyDir($relativePath);
            $this->addFolderToZip($zip, $fullPath, $basePath);
        } else {
            // Para archivos, descargamos el contenido y lo agregamos al ZIP
            $fileContent = $this->ftpService->downloadFile($fullPath);
            $zip->addFromString($relativePath, $fileContent);
        }
    }
}


    #[Route('/ftp/single-download', name: 'ftp_single_download')]
    public function downloadFile(Request $request): Response
    {
        $filepath = $request->query->get('path');
        $filename = basename($filepath);

        $content = $this->ftpService->downloadFile($filepath);

        if (!$content) {
            return new Response('Archivo no encontrado.', 404);
        }

        return new Response($content, 200, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"'
        ]);
    }

    
    #[Route('/ftp/delete', name: 'ftp_delete')]
    public function delete(): Response
    {
        // Eliminar archivo en el servidor FTP
        $this->ftpService->deleteFile('path/to/file.txt');

        return new Response('Archivo eliminado exitosamente');
    }

    #[Route('/ftp/create-dir', name: 'ftp_create_dir')]
    public function createDirectory(Request $request, SessionInterface $session): Response
    {
        // Crear directorio en el servidor FTP
        $this->ftpService->createDirectory($session->get('user_home')."/".$request->get('titulo'));

        return $this->redirectToRoute('repositories');
    }

    #[Route('/ftp/create-repo', name: 'ftp_create_repo')]
    public function createRepo(Request $request, SessionInterface $session, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $arch = new Repositorios();
        $arch->setUserId($userRepository->findByUsername($session->get('user_user')));
        $arch->setNombre($request->get('titulo'));
        $arch->setFechaCreacion(new \DateTime());
        $arch->setVersion(0);
        $arch->setDescripcion($request->get('descripcion'));

        $this->ftpService->createDirectory($session->get('user_home')."/".$request->get('titulo'));

        $entityManager->persist($arch);
        $entityManager->flush();
        return $this->redirectToRoute('repositories');
    }

    #[Route('/ftp-image/{filename}', name: 'ftp_image', requirements: ['filename' => '.+'])]
    public function getFtpImage(string $filename): Response
    {
        $fileContent = $this->ftpService->downloadFile($filename);

    // Responder con el contenido del archivo, especificando el tipo de imagen
    return new Response($fileContent, 200, [
        'Content-Type' => 'image/png', // Asume que la imagen es PNG, ajusta si es necesario
        'Content-Disposition' => 'inline; filename="' . $filename . '"'
    ]);
    }

    #[Route('/file/read', name: 'file_read', methods: ['GET'])]
    public function readFile(Request $request): Response
    {
        $path = $request->query->get('path');
        
        try {
            $content = $this->ftpService->readFile($path);
            return new Response($content);
        } catch (\Exception $e) {
            return new Response("Error leyendo el archivo", 500);
        }
    }
}
