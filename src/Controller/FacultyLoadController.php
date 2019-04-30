<?php

namespace App\Controller;

use App\Entity\FacultyLoad;
use App\Form\FacultyLoadType;
use App\Repository\FacultyLoadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/faculty-load")
 */
class FacultyLoadController extends AbstractController
{
    /**
     * @Route("/", name="faculty_load_index", methods={"GET"})
     */
    public function index(FacultyLoadRepository $facultyLoadRepository): Response
    {
        return $this->render('faculty_load/index.html.twig', [
            'faculty_loads' => $facultyLoadRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="faculty_load_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $facultyLoad = new FacultyLoad();
        $form = $this->createForm(FacultyLoadType::class, $facultyLoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($facultyLoad);
            $entityManager->flush();

            return $this->redirectToRoute('faculty_load_index');
        }

        return $this->render('faculty_load/new.html.twig', [
            'faculty_load' => $facultyLoad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="faculty_load_show", methods={"GET"})
     */
    public function show(FacultyLoad $facultyLoad): Response
    {
        return $this->render('faculty_load/show.html.twig', [
            'faculty_load' => $facultyLoad,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="faculty_load_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FacultyLoad $facultyLoad): Response
    {
        $form = $this->createForm(FacultyLoadType::class, $facultyLoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('faculty_load_index', [
                'id' => $facultyLoad->getId(),
            ]);
        }

        return $this->render('faculty_load/edit.html.twig', [
            'faculty_load' => $facultyLoad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="faculty_load_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FacultyLoad $facultyLoad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$facultyLoad->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($facultyLoad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('faculty_load_index');
    }
}
