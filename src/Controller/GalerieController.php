<?php

namespace App\Controller;

use App\Repository\SantonRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class GalerieController extends AbstractController
{
    #[Route('/galerie', name: 'app_galerie')]
    public function index(SantonRepository $santonRepository): Response
    {
        return $this->render('galerie/galerie.html.twig', [
            'santons' => $santonRepository->findAll(),
        ]);
    }
}
