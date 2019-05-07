<?php

namespace App\Controller;

use App\Entity\CurriculumSubjectEquivalence;
use App\Form\CurriculumSubjectEquivalenceType;
use App\Repository\CurriculumSubjectEquivalenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/curriculum-subject-equivalence")
 */
class CurriculumSubjectEquivalenceController extends AbstractController
{
    /**
     * @Route("/", name="curriculum_subject_equivalence_index", methods={"GET"})
     */
    public function index(CurriculumSubjectEquivalenceRepository $curriculumSubjectEquivalenceRepository): Response
    {
        return $this->render('curriculum_subject_equivalence/index.html.twig', [
            'curriculum_subject_equivalences' => $curriculumSubjectEquivalenceRepository->findAll(),
            'module' => 'curriculum-subject-equivalence',
        ]);
    }

    /**
     * @Route("/new", name="curriculum_subject_equivalence_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $curriculumSubjectEquivalence = new CurriculumSubjectEquivalence();
        $form = $this->createForm(CurriculumSubjectEquivalenceType::class, $curriculumSubjectEquivalence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($curriculumSubjectEquivalence);
            $entityManager->flush();

            return $this->redirectToRoute('curriculum_subject_equivalence_index');
        }

        return $this->render('curriculum_subject_equivalence/new.html.twig', [
            'curriculum_subject_equivalence' => $curriculumSubjectEquivalence,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="curriculum_subject_equivalence_show", methods={"GET"})
     */
    public function show(CurriculumSubjectEquivalence $curriculumSubjectEquivalence): Response
    {
        return $this->render('curriculum_subject_equivalence/show.html.twig', [
            'curriculum_subject_equivalence' => $curriculumSubjectEquivalence,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="curriculum_subject_equivalence_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CurriculumSubjectEquivalence $curriculumSubjectEquivalence): Response
    {
        $form = $this->createForm(CurriculumSubjectEquivalenceType::class, $curriculumSubjectEquivalence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('curriculum_subject_equivalence_index', [
                'id' => $curriculumSubjectEquivalence->getId(),
            ]);
        }

        return $this->render('curriculum_subject_equivalence/edit.html.twig', [
            'curriculum_subject_equivalence' => $curriculumSubjectEquivalence,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="curriculum_subject_equivalence_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CurriculumSubjectEquivalence $curriculumSubjectEquivalence): Response
    {
        if ($this->isCsrfTokenValid('delete'.$curriculumSubjectEquivalence->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($curriculumSubjectEquivalence);
            $entityManager->flush();
        }

        return $this->redirectToRoute('curriculum_subject_equivalence_index');
    }
}
