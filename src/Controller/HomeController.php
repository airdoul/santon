<?php

namespace App\Controller;

use App\Repository\SantonRepository;
use App\Service\MessageGenerator;
use App\Service\DateMessage;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $messageGenerator;
    private $dateMessage;

    public function __construct(MessageGenerator $messageGenerator, DateMessage $dateMessage)
    {
        $this->messageGenerator = $messageGenerator;
        $this->dateMessage = $dateMessage;
    }

    #[Route('/', name: 'app_home')]
    public function index(Security $security, SantonRepository $santonRepository): Response
    {
        if (!$security->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app_first');
        }

        $santons = $santonRepository->findBy([], ['createdAt' => 'DESC'], 4);
        $randomMessage = $this->messageGenerator->generateMessage();
        $dateMessage = $this->dateMessage->getMessage();

        return $this->render('home/home.html.twig', [
            'santons' => $santons,
            'randomMessage' => $randomMessage,
            'dateMessage' => $dateMessage,
        ]);
    }
}
