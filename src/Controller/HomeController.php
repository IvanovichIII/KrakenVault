<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\FtpService;
use App\Controller\FtpController;

final class HomeController extends AbstractController
{
    private FtpService $ftpService;

    public function __construct(FtpService $ftpService)
    {
        $this->ftpService = $ftpService;
    }

    #[Route('/', name: 'Home')]
    public function home(SessionInterface $session): Response
    {
        if (!$session->has('user_id')) {
            return $this->render('home/home.html.twig');
        }
        return $this->render('home/homeUsu.html.twig', [
            'usuario' => $session->get('user_user'),
            'avatar' => $session->get('user_avatar'),
        ]);
        
    }

    #[Route('/prueba', name: 'prueba')]
    public function prueba(SessionInterface $session): Response
    {
        /*$file = "holita";

        $filename = pathinfo($file, PATHINFO_FILENAME);

        return $this->render('home/prueba.html.twig', [
            'usuario' => $session->get('user_user'),
            'avatar' => $session->get('user_avatar'),
            'filename' => $filename,
            'filecontent' => $this->ftpService->downloadFile($file),
        ]);*/

        /*$this->ftpService->uploadFile("holita", "manos arriba, esto es un atraco");
        return $this->redirectToRoute('Home');*/
    }
    
}
