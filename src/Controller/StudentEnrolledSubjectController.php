<?php

namespace App\Controller;

use App\Entity\StudentEnrolledSubject;
use App\Form\StudentEnrolledSubjectType;
use App\Repository\StudentEnrolledSubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student/enrolled/subject")
 */
class StudentEnrolledSubjectController extends AbstractController
{
    /**
     * @Route("/", name="student_enrolled_subject_index", methods={"GET"})
     */
    public function index(StudentEnrolledSubjectRepository $studentEnrolledSubjectRepository): Response
    {
        return $this->render('student_enrolled_subject/index.html.twig', [
            'student_enrolled_subjects' => $studentEnrolledSubjectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="student_enrolled_subject_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studentEnrolledSubject = new StudentEnrolledSubject();
        $form = $this->createForm(StudentEnrolledSubjectType::class, $studentEnrolledSubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studentEnrolledSubject);
            $entityManager->flush();

            return $this->redirectToRoute('student_enrolled_subject_index');
        }

        return $this->render('student_enrolled_subject/new.html.twig', [
            'student_enrolled_subject' => $studentEnrolledSubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_enrolled_subject_show", methods={"GET"})
     */
    public function show(StudentEnrolledSubject $studentEnrolledSubject): Response
    {
        return $this->render('student_enrolled_subject/show.html.twig', [
            'student_enrolled_subject' => $studentEnrolledSubject,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_enrolled_subject_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudentEnrolledSubject $studentEnrolledSubject): Response
    {
        $form = $this->createForm(StudentEnrolledSubjectType::class, $studentEnrolledSubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_enrolled_subject_index', [
                'id' => $studentEnrolledSubject->getId(),
            ]);
        }

        return $this->render('student_enrolled_subject/edit.html.twig', [
            'student_enrolled_subject' => $studentEnrolledSubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_enrolled_subject_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudentEnrolledSubject $studentEnrolledSubject): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studentEnrolledSubject->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studentEnrolledSubject);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_enrolled_subject_index');
    }
}
