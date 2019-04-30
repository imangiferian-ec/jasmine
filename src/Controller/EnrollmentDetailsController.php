<?php

namespace App\Controller;

use App\Entity\EnrollmentDetails;
use App\Form\EnrollmentDetailsType;
use App\Repository\EnrollmentDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/enrollment-details")
 */
class EnrollmentDetailsController extends AbstractController
{
    /**
     * @Route("/", name="enrollment_details_index", methods={"GET"})
     */
    public function index(EnrollmentDetailsRepository $enrollmentDetailsRepository): Response
    {
        return $this->render('enrollment_details/index.html.twig', [
            'enrollment_details' => $enrollmentDetailsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="enrollment_details_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $enrollmentDetail = new EnrollmentDetails();
        $form = $this->createForm(EnrollmentDetailsType::class, $enrollmentDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($enrollmentDetail);
            $entityManager->flush();

            return $this->redirectToRoute('enrollment_details_index');
        }

        return $this->render('enrollment_details/new.html.twig', [
            'enrollment_detail' => $enrollmentDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="enrollment_details_show", methods={"GET"})
     */
    public function show(EnrollmentDetails $enrollmentDetail): Response
    {
        return $this->render('enrollment_details/show.html.twig', [
            'enrollment_detail' => $enrollmentDetail,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="enrollment_details_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EnrollmentDetails $enrollmentDetail): Response
    {
        $form = $this->createForm(EnrollmentDetailsType::class, $enrollmentDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('enrollment_details_index', [
                'id' => $enrollmentDetail->getId(),
            ]);
        }

        return $this->render('enrollment_details/edit.html.twig', [
            'enrollment_detail' => $enrollmentDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="enrollment_details_delete", methods={"DELETE"})
     */
    public function delete(Request $request, EnrollmentDetails $enrollmentDetail): Response
    {
        if ($this->isCsrfTokenValid('delete'.$enrollmentDetail->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($enrollmentDetail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('enrollment_details_index');
    }
}
