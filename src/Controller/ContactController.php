<?php

namespace App\Controller;

use App\Form\ContactTypeForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function contact(Request $request, HttpClientInterface $httpClient): Response
    {
        $form = $this->createForm(ContactTypeForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // définition de l'endpoint Formspree pour le formulaire ContactTypeForm
            $formspreeEndpoint = 'https://formspree.io/f/mgvyrowj';

            // Ce qui sera envoyé au endpoint formspree pour le formulaire ContactTypeForm
            $payload = [
                'name'    => $data['nom'],
                'email'   => $data['email'],
                'message' => $data['message'],
            ];

            // Envoi via HTTP POST à Formspree
            $response = $httpClient->request('POST', $formspreeEndpoint, [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => $payload,
            ]);

            // success ou erreur
            if ($response->getStatusCode() === 200 || $response->getStatusCode() === 202) {
                $this->addFlash('success', 'Message envoyé avec succès !');
            } else {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi.');
            }

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}