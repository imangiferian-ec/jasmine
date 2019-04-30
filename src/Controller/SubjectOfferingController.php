<?php

namespace App\Controller;

use App\Entity\SubjectOffering;
use App\Form\SubjectOfferingType;
use App\Repository\SubjectOfferingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/subject/offering")
 */
class SubjectOfferingController extends AbstractController
{
    /**
     * @Route("/", name="subject_offering_index", methods={"GET"})
     */
    public function index(SubjectOfferingRepository $subjectOfferingRepository): Response
    {
        return $this->render('subject_offering/index.html.twig', [
            'subject_offerings' => $subjectOfferingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="subject_offering_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $subjectOffering = new SubjectOffering();
        $form = $this->createForm(SubjectOfferingType::class, $subjectOffering);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subjectOffering);
            $entityManager->flush();

            return $this->redirectToRoute('subject_offering_index');
        }

        return $this->render('subject_offering/new.html.twig', [
            'subject_offering' => $subjectOffering,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="subject_offering_show", methods={"GET"})
     */
    public function show(SubjectOffering $subjectOffering): Response
    {
        return $this->render('subject_offering/show.html.twig', [
            'subject_offering' => $subjectOffering,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="subject_offering_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SubjectOffering $subjectOffering): Response
    {
        $form = $this->createForm(SubjectOfferingType::class, $subjectOffering);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('subject_offering_index', [
                'id' => $subjectOffering->getId(),
            ]);
        }

        return $this->render('subject_offering/edit.html.twig', [
            'subject_offering' => $subjectOffering,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="subject_offering_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SubjectOffering $subjectOffering): Response
    {
        if ($this->isCsrfTokenValid('delete'.$subjectOffering->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($subjectOffering);
            $entityManager->flush();
        }

        return $this->redirectToRoute('subject_offering_index');
    }
}
