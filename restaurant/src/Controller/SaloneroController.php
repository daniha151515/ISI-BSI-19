<?php

namespace App\Controller;

use App\Entity\Salonero;
use App\Form\SaloneroType;
use App\Repository\SaloneroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/salonero")
 */
class SaloneroController extends AbstractController
{
    /**
     * @Route("/", name="salonero_index", methods={"GET"})
     */
    public function index(SaloneroRepository $saloneroRepository): Response
    {
        return $this->render('salonero/index.html.twig', [
            'saloneros' => $saloneroRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="salonero_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $salonero = new Salonero();
        $form = $this->createForm(SaloneroType::class, $salonero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($salonero);
            $entityManager->flush();

            return $this->redirectToRoute('salonero_index');
        }

        return $this->render('salonero/new.html.twig', [
            'salonero' => $salonero,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salonero_show", methods={"GET"})
     */
    public function show(Salonero $salonero): Response
    {
        return $this->render('salonero/show.html.twig', [
            'salonero' => $salonero,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="salonero_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Salonero $salonero): Response
    {
        $form = $this->createForm(SaloneroType::class, $salonero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('salonero_index', [
                'id' => $salonero->getId(),
            ]);
        }

        return $this->render('salonero/edit.html.twig', [
            'salonero' => $salonero,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salonero_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Salonero $salonero): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salonero->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($salonero);
            $entityManager->flush();
        }

        return $this->redirectToRoute('salonero_index');
    }
}
