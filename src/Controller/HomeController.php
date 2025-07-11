<?php

namespace App\Controller;

use App\Repository\SantonRepository;
use App\Service\MessageGenerator;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $messageGenerator;

    public function __construct(MessageGenerator $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }

    #[Route('/', name: 'app_home')]
    public function index(Security $security, SantonRepository $santonRepository): Response
    {
        if (!$security->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app_first');
        }

        $santons = $santonRepository->findBy([], ['createdAt' => 'DESC'], 4);
        $message = $this->messageGenerator->generateMessage();

        return $this->render('home/home.html.twig', [
            'santons' => $santons,
            'message' => $message,
        ]);
    }
}