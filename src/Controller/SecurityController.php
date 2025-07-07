<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterFormTypeForm;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/inscription', name: 'app_register')]
    public function register(Request $request,UserPasswordHasherInterface $passwordEncoder,EntityManagerInterface $entityManager,AuthenticationUtils $authenticationUtils): Response
    {
        
        $user = new User;
      
        

        // Récupération du formulaire et association avec l'objet
        $form = $this->createForm(RegisterFormTypeForm::class,$user);

        // Récupération des données POST du formulaire
        $form->handleRequest($request);
        // Vérification si le formulaire est soumis et Valide
        if($form->isSubmitted() && $form->isValid()){
            $user->setRoles(['ROLE_USER']);
            $user->setMotDePasse(
                $passwordEncoder->hashPassword($user,$form->get('motDePasse')->getData())
            );
            // Persistance des données
            $entityManager->persist($user);
            // Envoi en BDD
            $entityManager->flush();
        
        // Redirection vers la page de connexion
        return $this->redirectToRoute('app_login');
        }
        return $this->render('security/register.html.twig', [
          'userForm' => $form->createView(), //envoie du formulaire en VUE
        ]);
        
    }
}
