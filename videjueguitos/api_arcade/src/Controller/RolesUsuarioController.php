<?php

namespace App\Controller;

use App\Entity\RolesUsuario;
use App\Form\RolesUsuarioType;
use App\Repository\RolesUsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/roles/usuario')]
class RolesUsuarioController extends AbstractController
{
    #[Route('/', name: 'app_roles_usuario_index', methods: ['GET'])]
    public function index(RolesUsuarioRepository $rolesUsuarioRepository): Response
    {
        return $this->render('roles_usuario/index.html.twig', [
            'roles_usuarios' => $rolesUsuarioRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_roles_usuario_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $rolesUsuario = new RolesUsuario();
        $form = $this->createForm(RolesUsuarioType::class, $rolesUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rolesUsuario);
            $entityManager->flush();

            return $this->redirectToRoute('app_roles_usuario_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('roles_usuario/new.html.twig', [
            'roles_usuario' => $rolesUsuario,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_roles_usuario_show', methods: ['GET'])]
    public function show(RolesUsuario $rolesUsuario): Response
    {
        return $this->render('roles_usuario/show.html.twig', [
            'roles_usuario' => $rolesUsuario,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_roles_usuario_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RolesUsuario $rolesUsuario, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RolesUsuarioType::class, $rolesUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_roles_usuario_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('roles_usuario/edit.html.twig', [
            'roles_usuario' => $rolesUsuario,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_roles_usuario_delete', methods: ['POST'])]
    public function delete(Request $request, RolesUsuario $rolesUsuario, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rolesUsuario->getId(), $request->request->get('_token'))) {
            $entityManager->remove($rolesUsuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_roles_usuario_index', [], Response::HTTP_SEE_OTHER);
    }
}
