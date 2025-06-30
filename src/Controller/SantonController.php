<?php

namespace App\Controller;

use App\Entity\Santon;
use App\Entity\Commentaire;
use App\Form\SantonTypeForm;
use App\Form\CommentaireTypeForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class SantonController extends AbstractController
{
    #[Route('/santon/ajouter', name: 'add_santon')]
    #[Route('/santon/{id}/modifier', name: 'edit_santon')]
    #[IsGranted('ROLE_USER')]


    public function addOrEdit(Request $request, EntityManagerInterface $em, Santon $santon = null): Response
    {
        $editMode = null !== $santon;

        if (!$santon) {
            $santon = new Santon();
        } elseif ($santon->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(SantonTypeForm::class, $santon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$editMode) {
                $santon->setUser($this->getUser());
            }
            $em->persist($santon);
            $em->flush();

            $this->addFlash('success', $editMode ? 'Santon modifié avec succès.' : 'Santon ajouté avec succès.');
            return $this->redirectToRoute('show_santon', ['id' => $santon->getId()]);
        }

        return $this->render('santon/add.html.twig', [
            'form' => $form->createView(),
            'editMode' => $editMode,
            'santon' => $santon,
        ]);
    }

    #[Route('/santon/{id}', name: 'show_santon')]

    public function show(Request $request, Santon $santon, EntityManagerInterface $entityManager): Response
{
    $commentaire = new Commentaire();
    $form = $this->createForm(CommentaireTypeForm::class, $commentaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $commentaire->setSanton($santon);
        $commentaire->setUser($this->getUser());
        $commentaire->setCreatedAt(new \DateTimeImmutable());
        
        $entityManager->persist($commentaire);
        $entityManager->flush();

        return $this->redirectToRoute('show_santon', ['id' => $santon->getId()]);
    }

    return $this->render('santon/show.html.twig', [
        'santon' => $santon,
        'form' => $form->createView(),
    ]);
}

    #[Route('/santon/{id}/supprimer', name: 'delete_santon', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, Santon $santon, EntityManagerInterface $em): Response
    {
        if ($santon->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete'.$santon->getId(), $request->request->get('_token'))) {
            $em->remove($santon);
            $em->flush();
            $this->addFlash('success', 'Santon supprimé avec succès.');
        }

        return $this->redirectToRoute('app_galerie');
    }
}
