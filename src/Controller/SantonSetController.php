<?php

namespace App\Controller;

use App\DTO\SantonSetInputDTO;
use App\Form\SantonSetType;
use App\Service\SantonSetService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SantonSetController extends AbstractController
{
    #[Route('/santon-set/create', name: 'app_santon_set_create', methods: ['GET', 'POST'])]
    public function create(Request $request, SantonSetService $santonSetService): Response
    {
        $form = $this->createForm(SantonSetType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $inputDTO = new SantonSetInputDTO(
                $data['nom'],
                $data['description'],
                $data['photo'],
                $data['prix'],
                $data['santonIds'],
                $data['regionIds'],
                $data['theme']
            );

            $outputDTO = $santonSetService->createSantonSet($inputDTO);

            $this->addFlash('success', 'Le set de santons a été créé avec succès.');
            return $this->redirectToRoute('app_santon_set_show', ['id' => $outputDTO->id]);
        }

        return $this->render('santon_set/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}