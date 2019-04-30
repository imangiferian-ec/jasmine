<?php

namespace App\Controller;

use App\Entity\CurriculumSubject;
use App\Form\CurriculumSubjectType;
use App\Repository\CurriculumSubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/curriculum-subject")
 */
class CurriculumSubjectController extends AbstractController
{
    /**
     * @Route("/", name="curriculum_subject_index", methods={"GET"})
     */
    public function index(CurriculumSubjectRepository $curriculumSubjectRepository): Response
    {
        return $this->render('curriculum_subject/index.html.twig', [
            'curriculum_subjects' => $curriculumSubjectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="curriculum_subject_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $curriculumSubject = new CurriculumSubject();
        $form = $this->createForm(CurriculumSubjectType::class, $curriculumSubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($curriculumSubject);
            $entityManager->flush();

            return $this->redirectToRoute('curriculum_subject_index');
        }

        return $this->render('curriculum_subject/new.html.twig', [
            'curriculum_subject' => $curriculumSubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="curriculum_subject_show", methods={"GET"})
     */
    public function show(CurriculumSubject $curriculumSubject): Response
    {
        return $this->render('curriculum_subject/show.html.twig', [
            'curriculum_subject' => $curriculumSubject,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="curriculum_subject_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CurriculumSubject $curriculumSubject): Response
    {
        $form = $this->createForm(CurriculumSubjectType::class, $curriculumSubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('curriculum_subject_index', [
                'id' => $curriculumSubject->getId(),
            ]);
        }

        return $this->render('curriculum_subject/edit.html.twig', [
            'curriculum_subject' => $curriculumSubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="curriculum_subject_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CurriculumSubject $curriculumSubject): Response
    {
        if ($this->isCsrfTokenValid('delete'.$curriculumSubject->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($curriculumSubject);
            $entityManager->flush();
        }

        return $this->redirectToRoute('curriculum_subject_index');
    }
}
