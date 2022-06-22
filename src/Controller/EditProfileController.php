<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\EmailFormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class EditProfileController extends AbstractController
{
    public function __construct(EntityManagerInterface $em, EmailVerifier $emailVerifier)
    {
        $this->em = $em;
        $this->emailVerifier = $emailVerifier;
    }
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->render('edit_profile/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/edit/profile', name: 'app_edit_profile')]
    public function edit(Request $request, UserPasswordHasherInterface $hasher)
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('index');
        }
        $user = $this->getUser();

        $form = $this->createForm(UserType::class, $user);
        $mailForm = $this->createForm(EmailFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($user->getPlainPassword()) {
                $pwd = $hasher->hashPassword($user, $user->getPlainPassword());
                $user->setPassword($pwd);
            }

            $this->em->persist($user);
            $this->em->flush();
        }

        $mailForm->handleRequest($request);
        if ($mailForm->isSubmitted() && $mailForm->isValid()) {
            $user->setIsVerified(false);
            $this->emailVerifier->sendEmailConfirmation(
                'app_verify_email',
                $user,
                (new TemplatedEmail())
                    ->from(new Address('test@mail.fr', 'Mails quizz Bot'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            $this->em->persist($user);
            $this->em->flush();
        }
        return $this->render('edit_profile/index.html.twig', [
            'mailForm' => $mailForm->createView(),
            'form' => $form->createView(),
        ]);
    }
}
