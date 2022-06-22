<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_homepage');
        }


        $user = $this->getUser();

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'history' => $user->getHistory(),
            'quizz' => $user->getCategories()
        ]);
    }
}
