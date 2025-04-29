<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\FtpService;

final class RegistrationController extends AbstractController
{

    private FtpService $ftpService;

    public function __construct(FtpService $ftpService)
    {
        $this->ftpService = $ftpService;
    }

    #[Route('/signup', name: 'signup')]
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, SessionInterface $session): Response
    {
        // Si el formulario es enviado por POST
        if ($request->isMethod('POST')) {
            $username = $request->get('username');
            $email = $request->get('email');
            $password = $request->get('password');

            // Crear el nuevo usuario
            $user = new User();
            $user->setUsername($username);
            $user->setEmail($email);

            // Cifrar la contraseña
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $password
                )
            );
            $user->setRole("user");
            $user->setFechaRegistro(new \DateTime());
            $user->setUltimoAcceso(new \DateTime());

            $user->setAvatarPath("avatar/icono-" . random_int(1, 6) . ".png");
            $user->setHomePath("KrakenVault/" . $username);
            $this->ftpService->createDirectory($user->getHomePath());
            $dataPath = $user->getHomePath() . "/.data";
            $data = $data = ["username" => $user->getUsername(), "email" => $user->getEmail(), "created_at" => $user->getFechaRegistro(), "repositories" => []];
            $this->ftpService->uploadFile($dataPath, json_encode($data, JSON_PRETTY_PRINT));

            // Persistir el usuario en la base de datos
            $entityManager->persist($user);
            $entityManager->flush();

            // Redirigir al login o a una página de éxito

            $session->set('user_id', $user->getId());
            $session->set('user_user', $user->getUsername());
            $session->set('user_avatar', $user->getAvatarPath());

            return $this->redirectToRoute('Home');
        }

        return $this->render('registration/register.html.twig');
    }

    #[Route('/login', name: 'login')]
    public function login(Request $request, UserRepository $userRepository, SessionInterface $session): Response
    {
        if ($request->isMethod('POST')) {
            $username = $request->request->get('user');
            $password = $request->request->get('password');

            $user = $userRepository->findByUsername($username);

            if ($user && password_verify($password, $user->getPassword())) {
                $session->set('user_id', $user->getId());
                $session->set('user_user', $user->getUsername());
                $session->set('user_avatar', $user->getAvatarPath());
                $session->set('user_home', $user->getHomePath());

                return $this->redirectToRoute('Home');
            } else {
                $this->addFlash('error', 'Usuario o contraseña incorrectos.');
                return $this->redirectToRoute('login');
            }
        }
        return $this->render('registration/login.html.twig');
    }

    #[Route('/logout', name: 'logout')]
    public function logout(SessionInterface $session): Response
    {
        if ($session->has('user_id')) {
            $session->clear();
        }
        return $this->redirectToRoute('Home');
    }
}
