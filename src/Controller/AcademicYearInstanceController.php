<?php

namespace App\Controller;

use App\Entity\AcademicYearInstance;
use App\Form\AcademicYearInstanceType;
use App\Repository\AcademicYearInstanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ay-instance")
 */
class AcademicYearInstanceController extends AbstractController
{
    /**
     * @Route("/", name="academic_year_instance_index", methods={"GET"})
     */
    public function index(AcademicYearInstanceRepository $academicYearInstanceRepository): Response
    {
        return $this->render('academic_year_instance/index.html.twig', [
            'academic_year_instances' => $academicYearInstanceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="academic_year_instance_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $academicYearInstance = new AcademicYearInstance();
        $form = $this->createForm(AcademicYearInstanceType::class, $academicYearInstance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($academicYearInstance);
            $entityManager->flush();

            return $this->redirectToRoute('academic_year_instance_index');
        }

        return $this->render('academic_year_instance/new.html.twig', [
            'academic_year_instance' => $academicYearInstance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="academic_year_instance_show", methods={"GET"})
     */
    public function show(AcademicYearInstance $academicYearInstance): Response
    {
        return $this->render('academic_year_instance/show.html.twig', [
            'academic_year_instance' => $academicYearInstance,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="academic_year_instance_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AcademicYearInstance $academicYearInstance): Response
    {
        $form = $this->createForm(AcademicYearInstanceType::class, $academicYearInstance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('academic_year_instance_index', [
                'id' => $academicYearInstance->getId(),
            ]);
        }

        return $this->render('academic_year_instance/edit.html.twig', [
            'academic_year_instance' => $academicYearInstance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="academic_year_instance_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AcademicYearInstance $academicYearInstance): Response
    {
        if ($this->isCsrfTokenValid('delete'.$academicYearInstance->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($academicYearInstance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('academic_year_instance_index');
    }
}
