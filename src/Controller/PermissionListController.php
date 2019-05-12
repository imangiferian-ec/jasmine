<?php

namespace App\Controller;

use App\Entity\PermissionList;
use App\Form\PermissionListType;
use App\Repository\PermissionListRepository;
use App\Repository\SystemModuleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\GetDataService;
use App\Entity\SystemModule;

/**
 * @Route("/permission/list")
 */
class PermissionListController extends AbstractController
{
    /**
     * @Route("/modify-all", name="modify_all_pl", methods={"GET"})
     */
    public function modifyAll(GetDataService $getDataService, PermissionListRepository $permissionListRepository): Response
    {
        $data['systemModules'] = $getDataService->fetch(SystemModule::class);

        $data['permission_lists'] = $permissionListRepository->findAll();
        return $this->render('permission_list/modifyAll.html.twig', $data);
    }

    /**
     * @Route("/", name="permission_list_index", methods={"GET"})
     */
    public function index(GetDataService $getDataService, PermissionListRepository $permissionListRepository): Response
    {
        $data['systemModules'] = $getDataService->fetch(SystemModule::class);
        //print_r($data['systemModules']); die();
        $data['permission_lists'] = $permissionListRepository->findAll();
        return $this->render('permission_list/index.html.twig', $data);
    }

    /**
     * @Route("/{id}", name="permission_list_show", methods={"GET"})
     */
    public function show(PermissionList $permissionList): Response
    {
        return $this->render('permission_list/show.html.twig', [
            'permission_list' => $permissionList,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="permission_list_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PermissionList $permissionList): Response
    {
        $form = $this->createForm(PermissionListType::class, $permissionList);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
          $permittedRoles = $form->get('permittedRoles')->getData();
           $finalPermittedRoles = [];
          foreach($permittedRoles as $permittedRole)
          {
            $finalPermittedRoles[] = $permittedRole->getName();
          }

          //$permissionList->setPermittedRoles(array(json_encode($finalPermittedRoles)));
          $permissionList->setPermittedRoles($finalPermittedRoles);
          $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('permission_list_index', [
                'id' => $permissionList->getId(),
            ]);
        }
        return $this->render('permission_list/edit.html.twig', [
            'permission_list' => $permissionList,
            'form' => $form->createView(),
        ]);
    }
}
