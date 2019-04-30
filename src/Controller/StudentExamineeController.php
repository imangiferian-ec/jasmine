<?php

namespace App\Controller;

use App\Entity\StudentExaminee;
use App\Form\StudentExamineeType;
use App\Repository\StudentExamineeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student-examinee")
 */
class StudentExamineeController extends AbstractController
{
    /**
     * @Route("/", name="student_examinee_index", methods={"GET"})
     */
    public function index(StudentExamineeRepository $studentExamineeRepository): Response
    {
        return $this->render('student_examinee/index.html.twig', [
            'student_examinees' => $studentExamineeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="student_examinee_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studentExaminee = new StudentExaminee();
        $form = $this->createForm(StudentExamineeType::class, $studentExaminee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studentExaminee);
            $entityManager->flush();

            return $this->redirectToRoute('student_examinee_index');
        }

        return $this->render('student_examinee/new.html.twig', [
            'student_examinee' => $studentExaminee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_examinee_show", methods={"GET"})
     */
    public function show(StudentExaminee $studentExaminee): Response
    {
        return $this->render('student_examinee/show.html.twig', [
            'student_examinee' => $studentExaminee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_examinee_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudentExaminee $studentExaminee): Response
    {
        $form = $this->createForm(StudentExamineeType::class, $studentExaminee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_examinee_index', [
                'id' => $studentExaminee->getId(),
            ]);
        }

        return $this->render('student_examinee/edit.html.twig', [
            'student_examinee' => $studentExaminee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_examinee_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudentExaminee $studentExaminee): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studentExaminee->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studentExaminee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_examinee_index');
    }
}
