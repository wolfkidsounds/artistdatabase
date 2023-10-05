<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/members', name: 'app_members')]
    public function members(): Response
    {
        return $this->render('members/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/members/{id}', name: 'app_members_id')]
    public function user(): Response
    {
        return $this->render('members/id.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
