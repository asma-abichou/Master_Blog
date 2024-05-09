<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminAccountController extends AbstractController
{
    #[Route('/login', name: 'login_admin_page')]
    public function loginAdmin(): Response
    {
        return $this->render('adminLogin.html.twig');

    }

}