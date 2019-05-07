<?php

namespace App\Controller;

use App\Entity\StudentProfilingDetails;
use App\Form\StudentProfilingDetailsType;
use App\Repository\StudentProfilingDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student-profiling-details")
 */
class StudentProfilingDetailsController extends AbstractController
{
    /**
     * @Route("/", name="student_profiling_details_index", methods={"GET"})
     */
    public function index(StudentProfilingDetailsRepository $studentProfilingDetailsRepository): Response
    {
        return $this->render('student_profiling_details/index.html.twig', [
            'student_profiling_details' => $studentProfilingDetailsRepository->findAll(),
            'module' => 'student-profiling-details',
        ]);
    }

    /**
     * @Route("/new", name="student_profiling_details_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studentProfilingDetail = new StudentProfilingDetails();
        $form = $this->createForm(StudentProfilingDetailsType::class, $studentProfilingDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studentProfilingDetail);
            $entityManager->flush();

            return $this->redirectToRoute('student_profiling_details_index');
        }

        return $this->render('student_profiling_details/new.html.twig', [
            'student_profiling_detail' => $studentProfilingDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_profiling_details_show", methods={"GET"})
     */
    public function show(StudentProfilingDetails $studentProfilingDetail): Response
    {
        return $this->render('student_profiling_details/show.html.twig', [
            'student_profiling_detail' => $studentProfilingDetail,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_profiling_details_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudentProfilingDetails $studentProfilingDetail): Response
    {
        $form = $this->createForm(StudentProfilingDetailsType::class, $studentProfilingDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_profiling_details_index', [
                'id' => $studentProfilingDetail->getId(),
            ]);
        }

        return $this->render('student_profiling_details/edit.html.twig', [
            'student_profiling_detail' => $studentProfilingDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_profiling_details_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudentProfilingDetails $studentProfilingDetail): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studentProfilingDetail->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studentProfilingDetail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_profiling_details_index');
    }
}
