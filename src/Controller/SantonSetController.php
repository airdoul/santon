<?php

namespace App\Controller;

use App\DTO\SantonSetDTO;
use App\Form\SantonSetType;
use App\Repository\SantonRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SantonSetController extends AbstractController
{
    #[Route('/santon-set/create', name: 'app_santon_set_create', methods: ['GET', 'POST'])]
    public function create(Request $request, SantonRepository $santonRepository, RegionRepository $regionRepository): Response
    {
        $santonSetDTO = new SantonSetDTO('', '', []);

        $form = $this->createForm(SantonSetType::class, $santonSetDTO, [
            'santons' => $santonRepository->findAll(),
            'regions' => $regionRepository->findAll(),
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->addFlash('success', 'Le set de santons a été créé avec succès.');
            return $this->redirectToRoute('app_santon_set_list');
        }

        return $this->render('santon_set/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}