<?php

namespace App\Controller;

use App\Entity\StudentGrade;
use App\Form\StudentGradeType;
use App\Repository\StudentGradeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student/grade")
 */
class StudentGradeController extends AbstractController
{
    /**
     * @Route("/", name="student_grade_index", methods={"GET"})
     */
    public function index(StudentGradeRepository $studentGradeRepository): Response
    {
        return $this->render('student_grade/index.html.twig', [
            'student_grades' => $studentGradeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="student_grade_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studentGrade = new StudentGrade();
        $form = $this->createForm(StudentGradeType::class, $studentGrade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studentGrade);
            $entityManager->flush();

            return $this->redirectToRoute('student_grade_index');
        }

        return $this->render('student_grade/new.html.twig', [
            'student_grade' => $studentGrade,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_grade_show", methods={"GET"})
     */
    public function show(StudentGrade $studentGrade): Response
    {
        return $this->render('student_grade/show.html.twig', [
            'student_grade' => $studentGrade,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_grade_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudentGrade $studentGrade): Response
    {
        $form = $this->createForm(StudentGradeType::class, $studentGrade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_grade_index', [
                'id' => $studentGrade->getId(),
            ]);
        }

        return $this->render('student_grade/edit.html.twig', [
            'student_grade' => $studentGrade,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_grade_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudentGrade $studentGrade): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studentGrade->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studentGrade);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_grade_index');
    }
}
