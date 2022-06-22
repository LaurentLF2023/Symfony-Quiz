<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Entity\History;
use App\Entity\Question;
use App\Entity\Quizz;
use App\Entity\Reponse;
use App\Repository\QuizzRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;
use App\Form\CategorieType;
use App\Form\QuestionType;
use App\Repository\CategorieRepository;
use App\Repository\HistoryRepository;
use App\Repository\ReponseRepository;
use Symfony\Component\HttpFoundation\Session\Session;

class QuizzController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }



    #[Route('/quizz/{id}/edit', name: 'app_quizz_edit')]
    public function edit(Categorie $categorie, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($categorie->getUser() != $this->getUser()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
        }

        $manager = $doctrine->getManager();
        $categorie_form = $this->createForm(CategorieType::class, $categorie);

        $question = new Question();
        $question_form = $this->createForm(QuestionType::class, $question);


        $categorie_form->handleRequest($request);
        if ($categorie_form->isSubmitted()) {
            $manager->persist($categorie);
        }

        $question_form->handleRequest($request);
        if ($question_form->isSubmitted()) {

            $question->setCategorie($categorie);
            $manager->persist($question);
        }


        $question_form->createView();


        $manager->flush();
        return $this->render('quizz/edit.html.twig', [
            'categorie' => $categorie,
            'categorie_form' => $categorie_form->createView(),
            'question_form' => $question_form->createView(),
            'questions' => $categorie->getQuestion()
        ]);
    }

    #[Route('/quizz/new', name: 'app_quizz_new')]
    public function new(Request $request, ManagerRegistry $doctrine)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $categorie = new Categorie();
        $manager = $doctrine->getManager();

        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $categorie->setUser($this->getUser());
            $manager->persist($categorie);


            $manager->flush();
            return $this->redirectToRoute('app_quizz_edit', ['id' => $categorie->getId()]);
        }

        return $this->render('quizz/new.html.twig', [
            'form' => $form->createView()
        ]);
    }


    #[Route('/quizz', name: 'index_quizz')]
    #[Route('/', name: 'index')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $quizzs =  $categorieRepository->findAll();

        return $this->render('quizz/index.html.twig', [
            'controller_name' => 'QuizzController',
            'quizzs' => $quizzs,
        ]);
    }

    #[Route('/quizz/{id}', name: 'app_quizz_show', methods: ['GET'])]
    public function show(Categorie $quizz = null, Request $request)
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');
        $history = $request->getSession()->get('history');


        if (isset($history[$quizz->getId()])) {
            if (count($history[$quizz->getId()]) >= count($quizz->getQuestion())) {
                return $this->redirectToRoute('app_quizz_result', ['id' => $quizz->getId()]);
            }
        }
        if (empty($quizz)) {
            throw $this->createNotFoundException('The product does not exist');
        }
        $question = $quizz->getQuestion()[$request->query->get('question') ?? 0];


        return $this->renderForm('quizz/show.html.twig', [
            'quizz' => $quizz,
            'question' =>  $question,
            'index' => $request->query->get('question') ?? 0
        ]);
    }

    #[Route('/quizz/{id}/result', name: 'app_quizz_result')]
    public function result(Categorie $quizz, Request $request)
    {
        $history = $request->getSession()->get('history');
        return $this->render('quizz/result.html.twig', [
            'result' => array_sum($history[$quizz->getId()]),
            'count' => count($history[$quizz->getId()])
        ]);
    }

    #[Route('/quizz/{id}/validate', name: 'app_quizz_validate', methods: ['POST'])]
    public function validate(Categorie $quizz, Request $request, ReponseRepository $reponseRepository, ManagerRegistry $doctrine)
    {
        $manager = $doctrine->getManager();
        $index = $request->query->get('question') ?? 0;

        $question = $quizz->getQuestion()[$index];
        $session = $request->getSession();

        $reponse = $reponseRepository->find($request->request->get('reponse'));
        if ($session->get('history') == null) {
            $session->set('history', []);
        }

        $history = $session->get('history');
        $quizz_id = $quizz->getId();

        if (!isset($history[$quizz_id])) {
            $history[$quizz_id] = [];
        }



        $history[$quizz_id][$question->getId()] =  $reponse->getReponseExpected();
        $session->set('history', $history);

        if (count($history[$quizz->getId()]) >= count($quizz->getQuestion())) {
            $current = $this->getUser();
            if ($current) {
                $new_history = new History();

                $new_history->setScore(array_sum($history[$quizz_id]));
                $new_history->setUser($current);
                $new_history->setCategorie($quizz);

                $manager->persist($new_history);
            }
            $manager->flush();
            return $this->redirectToRoute('app_quizz_result', ['id' => $quizz->getId()]);
        }


        $index++;
        return $this->redirectToRoute('app_quizz_show', ['id' => $quizz->getID(), 'question' => $index]);
    }

    #[Route('/quizz/{id}', name: 'app_quizz_delete')]
    public function delete(Categorie $quizz, Request $request, categorieRepository $categorieRepository)
    {
        if ($this->isCsrfTokenValid('delete' . $quizz->getId(), $request->request->get('_token'))) {
            $categorieRepository->remove($quizz);
        }

        return $this->redirectToRoute('index_quizz');
    }
}
