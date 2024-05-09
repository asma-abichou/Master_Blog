<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
     #[Route('/notification', name: 'notification_page')]
    public function listNotification(): Response
    {
        return $this->render("notifications.html.twig");
    }

}