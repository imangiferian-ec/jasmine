<?php

namespace App\Controller;

use App\Entity\ExamPassingScore;
use App\Form\ExamPassingScoreType;
use App\Repository\ExamPassingScoreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/exam-passing-score")
 */
class ExamPassingScoreController extends AbstractController
{
    /**
     * @Route("/", name="exam_passing_score_index", methods={"GET"})
     */
    public function index(ExamPassingScoreRepository $examPassingScoreRepository): Response
    {
        return $this->render('exam_passing_score/index.html.twig', [
            'exam_passing_scores' => $examPassingScoreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="exam_passing_score_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $examPassingScore = new ExamPassingScore();
        $form = $this->createForm(ExamPassingScoreType::class, $examPassingScore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($examPassingScore);
            $entityManager->flush();

            return $this->redirectToRoute('exam_passing_score_index');
        }

        return $this->render('exam_passing_score/new.html.twig', [
            'exam_passing_score' => $examPassingScore,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="exam_passing_score_show", methods={"GET"})
     */
    public function show(ExamPassingScore $examPassingScore): Response
    {
        return $this->render('exam_passing_score/show.html.twig', [
            'exam_passing_score' => $examPassingScore,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="exam_passing_score_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ExamPassingScore $examPassingScore): Response
    {
        $form = $this->createForm(ExamPassingScoreType::class, $examPassingScore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('exam_passing_score_index', [
                'id' => $examPassingScore->getId(),
            ]);
        }

        return $this->render('exam_passing_score/edit.html.twig', [
            'exam_passing_score' => $examPassingScore,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="exam_passing_score_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ExamPassingScore $examPassingScore): Response
    {
        if ($this->isCsrfTokenValid('delete'.$examPassingScore->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($examPassingScore);
            $entityManager->flush();
        }

        return $this->redirectToRoute('exam_passing_score_index');
    }
}
