<?php

namespace App\Controller;

use App\Entity\Mesa;
use App\Form\MesaType;
use App\Repository\MesaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mesa")
 */
class MesaController extends AbstractController
{
    /**
     * @Route("/", name="mesa_index", methods={"GET"})
     */
    public function index(MesaRepository $mesaRepository): Response
    {
        return $this->render('mesa/index.html.twig', [
            'mesas' => $mesaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="mesa_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mesa = new Mesa();
        $form = $this->createForm(MesaType::class, $mesa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mesa);
            $entityManager->flush();

            return $this->redirectToRoute('mesa_index');
        }

        return $this->render('mesa/new.html.twig', [
            'mesa' => $mesa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesa_show", methods={"GET"})
     */
    public function show(Mesa $mesa): Response
    {
        return $this->render('mesa/show.html.twig', [
            'mesa' => $mesa,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mesa_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Mesa $mesa): Response
    {
        $form = $this->createForm(MesaType::class, $mesa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mesa_index', [
                'id' => $mesa->getId(),
            ]);
        }

        return $this->render('mesa/edit.html.twig', [
            'mesa' => $mesa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesa_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Mesa $mesa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mesa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mesa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mesa_index');
    }
}
