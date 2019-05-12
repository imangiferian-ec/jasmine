<?php

namespace App\Controller;

use App\Entity\Semester;
use App\Form\SemesterType;
use App\Repository\SemesterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/semester")
 */
class SemesterController extends AbstractController
{
    /**
     * @Route("/", name="semester_index", methods={"GET"})
     */
    public function index(SemesterRepository $semesterRepository): Response
    {
        return $this->render('semester/index.html.twig', [
            'semesters' => $semesterRepository->findAll(),
            'module' => 'semester',
        ]);
    }

    /**
     * @Route("/new", name="semester_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $semester = new Semester();
        $form = $this->createForm(SemesterType::class, $semester);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($semester);
            $entityManager->flush();

            return $this->redirectToRoute('semester_index');
        }

        return $this->render('semester/new.html.twig', [
            'semester' => $semester,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="semester_show", methods={"GET"})
     */
    public function show(Semester $semester): Response
    {
        return $this->render('semester/show.html.twig', [
            'semester' => $semester,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="semester_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Semester $semester): Response
    {
        $form = $this->createForm(SemesterType::class, $semester);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('semester_index', [
                'id' => $semester->getId(),
            ]);
        }

        return $this->render('semester/edit.html.twig', [
            'semester' => $semester,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="semester_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Semester $semester): Response
    {
        if ($this->isCsrfTokenValid('delete'.$semester->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($semester);
            $entityManager->flush();
        }

        return $this->redirectToRoute('semester_index');
    }
}
