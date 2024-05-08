<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountAuthController extends AbstractController
{
    #[Route('/login', name: 'login_page')]
    public function loginAction(): Response
    {
        return $this->render('login.html.twig');

    }
    #[Route('/register', name: 'register_page')]
    public function registerAction(): Response
    {
        return $this->render('register.html.twig');
    }
    #[Route('/forget_password', name: 'forget_password_page')]
    public function forgetPasswordAction(): Response
    {
        return $this->render('forgetPassword.html.twig');
    }

}