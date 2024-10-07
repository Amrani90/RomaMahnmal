<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReferedActionsController extends AbstractController
{
    #[Route('/refered_actions', name: 'app_refered_actions')]
    public function index(): Response
    {
        return $this->render('refered_actions/index.html.twig', [
            'controller_name' => 'ReferedActions',
        ]);
    }
}
