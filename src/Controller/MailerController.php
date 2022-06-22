<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\HistoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{
    #[Route('/mailer', name: 'app_mailer')]
    public function index(): Response
    {
        return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);
    }

    public function sendEmail(MailerInterface $mailer, $address, $cond)
    {
        $email = (new TemplatedEmail())
            ->from('hello@example.com')
            ->to($address)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>'.$cond.'</p>');
            // ->htmlTemplate('mailer/index.html.twig');

        $mailer->send($email);
    }

    public function sendCondEmail(MailerInterface $mailer, $address, $cond)
    {
        $email = (new TemplatedEmail())
            ->from(new Address('hello@example.com','Mails quizz Bot'))
            ->to(new Address($address) )
            ->subject('Time for quiz!')
            ->text('Sending emails is fun again!')
            ->htmlTemplate('mailer/doneQuiz.html.twig')
            ->context([
                'cond =>'.$cond,
            ])
            ;

        $mailer->send($email);
    }
    
    #[Route('/sendOverMonth', name:'app_overMonth')]
    public function ConnectedOverMonth(MailerInterface $mailer, UserRepository $userRepository)
    {
        $users = $userRepository->getNotSeenSince(date("y-m-d", strtotime("-1 month")));
        $cond = "Vous ne vous êtes pas connecté depuis un mois !";
        foreach ($users as $user) {
            $address = $user->getEmail();
            $this->sendEmail($mailer, $address, $cond);
        }
        return $this->redirectToRoute('app_mailer');
    }

    #[Route('/sendLastMonth', name:'app_lastMonth')]
    public function ConnectedLastMonth(MailerInterface $mailer, UserRepository $userRepository)
    {
        $users = $userRepository->getSeenSince(date("y-m-d", strtotime("-1 month")));
        $cond = "Vous vous êtes connecté ce mois-çi !";
        foreach ($users as $user) {
            $address = $user->getEmail();
            $this->sendEmail($mailer, $address , $cond);
        }
        return $this->redirectToRoute('app_mailer');
    }

    #[Route('/SendLightPlayers', name:'app_sendLightPlayers')]
    public function countLightPlayers(MailerInterface $mailer, UserRepository $userRepository){
        $users = $userRepository->findAll();

        $condition = 3;
        foreach ($users as $user) {
            if(count($user->getHistory())== $condition){
                $address = $user->getEmail();
                $this->sendCondEmail($mailer, $address, $condition);
            }
        }
        return $this->redirectToRoute('app_mailer');
    }

    #[Route('/SendMidPlayers', name:'app_sendMidPlayers')]
    public function countMidPlayers(MailerInterface $mailer, UserRepository $userRepository){
        $users = $userRepository->findAll();
        $cond = 10;
        foreach ($users as $user) {
            if(count($user->getHistory())> $cond){
                $address = $user->getEmail();
                $this->sendCondEmail($mailer, $address, $cond);
            }
        }
        return $this->redirectToRoute('app_mailer');
    }
}
