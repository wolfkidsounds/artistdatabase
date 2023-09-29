<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/users/{username}', name: 'app_profile')]
    public function users(string $username = null): Response
    {
        if ($username) {
            return $this->render('profile/profile.html.twig', [
                'controller_name' => 'ProfileController',
            ]);
            
        } else {
            return $this->render('profile/all_profiles.html.twig', [
                'controller_name' => 'ProfileController',
            ]);
        }
    }
}
