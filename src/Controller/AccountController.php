<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/user/account', name: 'app_account')]
    public function account(): Response
    {
        return $this->render('account/account.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
}
