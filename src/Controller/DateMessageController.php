<?php

namespace App\Controller;

use App\Repository\SantonRepository;
use App\Service\MessageGenerator;
use App\Service\DateMessage;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DateMessageController extends AbstractController
{
    public function __construct(
        private MessageGenerator $messageGenerator,
        private DateMessage $dateMessage
    ) {
    }
    #[Route('/date-message', name: 'app_date_message')]
    public function index(DateMessage $dateMessage): Response
    {
        $dateMessageText = $dateMessage->getMessage();

        return $this->render('date_message/index.html.twig', [
            'dateMessage' => $dateMessageText,
        ]);
    }
}