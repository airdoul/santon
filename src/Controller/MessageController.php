<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    #[Route('/message', name: 'app_message')]
    public function index(MessageGenerator $messageGenerator): Response
    {
        $message = $messageGenerator->generateMessage();

        return $this->render('message/index.html.twig', [
            'message' => $message,
        ]);
    }
}