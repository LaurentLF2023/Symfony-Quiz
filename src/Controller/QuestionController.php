<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\QuestionType;
use App\Form\ReponseType;
use App\Repository\QuestionRepository;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/{id}/edit', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, ReponseRepository $reponseRepository, QuestionRepository $questionRepository): Response
    {

        if (
            $question->getCategorie()->getUser() != $this->getUser()
        ) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
        }
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questionRepository->add($question);
            return $this->redirectToRoute('app_quizz_edit', ['id' => $question->getCategorie()->getId()], Response::HTTP_SEE_OTHER);
        }

        $reponse = new Reponse();
        $form_reponse = $this->createForm(ReponseType::class, $reponse);

        $form_reponse->handleRequest($request);
        if ($form_reponse->isSubmitted()) {
            $reponse->setQuestion($question);
            $reponseRepository->add($reponse);
        }

        return $this->renderForm('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
            'reponses' => $question->getReponses(),
            'form_reponse' => $form_reponse
        ]);
    }

    #[Route('/{id}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question, QuestionRepository $questionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $question->getId(), $request->request->get('_token'))) {
            $questionRepository->remove($question);
        }

        return $this->redirectToRoute('app_quizz_edit', ['id' => $question->getCategorie()->getId()], Response::HTTP_SEE_OTHER);
    }
}
