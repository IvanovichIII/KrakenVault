<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\FtpService;

final class RepositoryController extends AbstractController
{

    private FtpService $ftpService;

    public function __construct(FtpService $ftpService)
    {
        $this->ftpService = $ftpService;
    }

    #[Route('/repositories', name: 'repositories')]
    public function repositories(SessionInterface $session): Response
    {
        if (!$session->has('user_id')) {
            return $this->redirectToRoute('Home');
        }

        return $this->render('repository/repositories.html.twig', [
            'usuario' => $session->get('user_user'),
            'avatar' => $session->get('user_avatar'),
            'directorios' => $this->ftpService->listDirectories("KrakenVault/" . $session->get('user_user')),
        ]);
    }

    #[Route('/repository/{repo}', name: 'repository')]
    public function repository(string $repo, SessionInterface $session): Response
    {
        if (!$session->has('user_id') || !$this->ftpService->directoryExists("KrakenVault/" . $session->get('user_user') . "/" . $repo)) {
            return $this->redirectToRoute('repositories');
        }

        return $this->render('repository/repository.html.twig', [
            'usuario' => $session->get('user_user'),
            'avatar' => $session->get('user_avatar'),
            'directorios' => $this->ftpService->listAll("KrakenVault/" . $session->get('user_user') . "/" . $repo),
            'repo' => $repo,
        ]);
    }

    #[Route('/repository/{repo}/historic', name: 'historic')]
    public function historic(string $repo, SessionInterface $session): Response
    {
        if (!$session->has('user_id') || !$this->ftpService->directoryExists("KrakenVault/" . $session->get('user_user') . "/" . $repo)) {
            return $this->redirectToRoute('repositories');
        }

        return $this->render('repository/historic.html.twig', [
            'usuario' => $session->get('user_user'),
            'avatar' => $session->get('user_avatar'),
            'directorios' => $this->ftpService->listAll("KrakenVault/" . $session->get('user_user') . "/" . $repo),
            'repo' => $repo,
        ]);
    }
}
