<?php

namespace App\Controller;

use App\Entity\CurriculumSubjectPrerequisite;
use App\Form\CurriculumSubjectPrerequisiteType;
use App\Repository\CurriculumSubjectPrerequisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/curriculum-subject-prerequisite")
 */
class CurriculumSubjectPrerequisiteController extends AbstractController
{
    /**
     * @Route("/", name="curriculum_subject_prerequisite_index", methods={"GET"})
     */
    public function index(CurriculumSubjectPrerequisiteRepository $curriculumSubjectPrerequisiteRepository): Response
    {
        return $this->render('curriculum_subject_prerequisite/index.html.twig', [
            'curriculum_subject_prerequisites' => $curriculumSubjectPrerequisiteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="curriculum_subject_prerequisite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $curriculumSubjectPrerequisite = new CurriculumSubjectPrerequisite();
        $form = $this->createForm(CurriculumSubjectPrerequisiteType::class, $curriculumSubjectPrerequisite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($curriculumSubjectPrerequisite);
            $entityManager->flush();

            return $this->redirectToRoute('curriculum_subject_prerequisite_index');
        }

        return $this->render('curriculum_subject_prerequisite/new.html.twig', [
            'curriculum_subject_prerequisite' => $curriculumSubjectPrerequisite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="curriculum_subject_prerequisite_show", methods={"GET"})
     */
    public function show(CurriculumSubjectPrerequisite $curriculumSubjectPrerequisite): Response
    {
        return $this->render('curriculum_subject_prerequisite/show.html.twig', [
            'curriculum_subject_prerequisite' => $curriculumSubjectPrerequisite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="curriculum_subject_prerequisite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CurriculumSubjectPrerequisite $curriculumSubjectPrerequisite): Response
    {
        $form = $this->createForm(CurriculumSubjectPrerequisiteType::class, $curriculumSubjectPrerequisite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('curriculum_subject_prerequisite_index', [
                'id' => $curriculumSubjectPrerequisite->getId(),
            ]);
        }

        return $this->render('curriculum_subject_prerequisite/edit.html.twig', [
            'curriculum_subject_prerequisite' => $curriculumSubjectPrerequisite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="curriculum_subject_prerequisite_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CurriculumSubjectPrerequisite $curriculumSubjectPrerequisite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$curriculumSubjectPrerequisite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($curriculumSubjectPrerequisite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('curriculum_subject_prerequisite_index');
    }
}
