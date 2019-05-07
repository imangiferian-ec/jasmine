<?php

namespace App\Controller;

use App\Entity\AddedProfLoad;
use App\Form\AddedProfLoadType;
use App\Repository\AddedProfLoadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/added-prof-load")
 */
class AddedProfLoadController extends AbstractController
{
    /**
     * @Route("/", name="added_prof_load_index", methods={"GET"})
     */
    public function index(AddedProfLoadRepository $addedProfLoadRepository): Response
    {
        return $this->render('added_prof_load/index.html.twig', [
            'added_prof_loads' => $addedProfLoadRepository->findAll(),
            'module' => 'added-prof-load',
        ]);
    }

    /**
     * @Route("/new", name="added_prof_load_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $addedProfLoad = new AddedProfLoad();
        $form = $this->createForm(AddedProfLoadType::class, $addedProfLoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($addedProfLoad);
            $entityManager->flush();

            return $this->redirectToRoute('added_prof_load_index');
        }

        return $this->render('added_prof_load/new.html.twig', [
            'added_prof_load' => $addedProfLoad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="added_prof_load_show", methods={"GET"})
     */
    public function show(AddedProfLoad $addedProfLoad): Response
    {
        return $this->render('added_prof_load/show.html.twig', [
            'added_prof_load' => $addedProfLoad,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="added_prof_load_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AddedProfLoad $addedProfLoad): Response
    {
        $form = $this->createForm(AddedProfLoadType::class, $addedProfLoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('added_prof_load_index', [
                'id' => $addedProfLoad->getId(),
            ]);
        }

        return $this->render('added_prof_load/edit.html.twig', [
            'added_prof_load' => $addedProfLoad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="added_prof_load_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AddedProfLoad $addedProfLoad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$addedProfLoad->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($addedProfLoad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('added_prof_load_index');
    }
}
