<?php
namespace App\Service;

use League\Flysystem\Filesystem;
use League\Flysystem\Ftp\FtpAdapter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use ZipArchive;
use League\Flysystem\StorageAttributes;


class FtpService
{
    private Filesystem $filesystem;

    public function __construct(FtpAdapter $adapter)
    {
        $this->filesystem = new Filesystem($adapter);
    }

    // Crear directorio
    public function createDirectory(string $path): void
    {
        $this->filesystem->createDirectory($path);
    }

    public function directoryExists(string $path): bool
    {
        return $this->filesystem->has($path);
    }

    // Subir archivo
    public function uploadFile(string $path, string $fileContent): void
    {
        $this->filesystem->write($path, $fileContent);
    }

    // Descargar archivo
    public function downloadFile(string $remotePath): ?string {
        if (!$this->filesystem->has($remotePath)) {
            return null;
        }
    
        return $this->filesystem->read($remotePath);
    }
    

    // Eliminar archivo
    public function deleteFile(string $path): void
    {
        $this->filesystem->delete($path);
    }

    // Verificar si un archivo existe
    public function fileExists(string $path): bool
    {
        return $this->filesystem->has($path);
    }

    public function getFileResponse(string $filename): StreamedResponse
    {
        return new StreamedResponse(function () use ($filename) {
            echo $this->downloadFile($filename);
        }, 200, [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }

    public function listDirectories(string $path = ''): array
    {
        $contents = $this->filesystem->listContents($path);
        $directories = [];

        foreach ($contents as $item) {
            if ($item['type'] === 'dir') {
                $dirName = pathinfo($item['path'], PATHINFO_FILENAME);
                $directories[] = [
                    'name' => $dirName,
                ];
            }
        }
        return $directories;
    }

    public function listAll(string $path = ''): array
    {
        $contents = $this->filesystem->listContents($path);
        $directories = [];
        $files = [];

        foreach ($contents as $item) {
            if ($item['type'] === 'dir') {
                $dirName = basename($item['path']);
                $directories[] = [
                    'name' => $dirName,
                    'type' => 'dir',
                    'content' => $this->listAll($item['path']),
                    'fullPath' => $item['path'],
                ];
            }
            else{
                $fileName = basename($item['path']);
                $extension = pathinfo($item['path'], PATHINFO_EXTENSION);
                $isImage = in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg']);
                $files[] = [
                    'name' => $fileName,
                    'type' => 'file',
                    'fullPath' => $item['path'],
                    'isImage' => $isImage,
                ];
            }
        }
        return array_merge($directories, $files);
    }

    public function readFile(string $path): string
    {
        return $this->filesystem->read($path);
    }

    public function readStream(string $path)
    {
        return $this->filesystem->readStream($path);
    }


    public function addToZip(ZipArchive $zip, string $currentPath, string $basePath): void
    {
        $items = $this->listDirectoryContents($currentPath);

        foreach ($items as $item) {
            $fullPath = $currentPath . '/' . $item['name'];
            $relativePath = ltrim(substr($fullPath, strlen($basePath)), '/');

            if ($item['type'] === 'dir') {
                $zip->addEmptyDir($relativePath);
                $this->addToZip($zip, $fullPath, $basePath);
            } else {
                $content = $this->downloadFile($fullPath);
                $zip->addFromString($relativePath, $content);
            }
        }
    }
    
    public function listDirectoryContents(string $path): array
    {
        $contents = [];
        $items = $this->filesystem->listContents($path, true); // true para hacerlo recursivo, si quieres

        foreach ($items as $item) {
            /** @var StorageAttributes $item */
            $contents[] = [
                'name' => basename($item->path()),
                'type' => $item->isDir() ? 'dir' : 'file'
            ];
        }

        return $contents;
    }
}
