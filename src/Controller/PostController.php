<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/post')]
class PostController extends AbstractController
{
    #[Route('/list-deleted', name: 'list_delete_posts_request')]
    public function viewProfile(): Response
    {
        return $this->render('delete_request.html.twig');

    }

}