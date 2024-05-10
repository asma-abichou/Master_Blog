<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
  #[Route('/profile', name: 'profile_page')]
    public function viewProfile(): Response
    {
        return $this->render('profile.html.twig');

    }
    #[Route('/profile/{id}', name: 'view_profile')]
    public function viewMyProfile(int $id): Response
    {
        return $this->render('profile_view.html.twig', ['id'=>$id]);

    }

    #[Route('/account_list', name: 'account_list')]
    public function listAction(): Response
    {
        return $this->render('account_list.html.twig');

    }
}