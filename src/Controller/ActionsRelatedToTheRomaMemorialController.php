<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActionsRelatedToTheRomaMemorialController extends AbstractController
{
    #[Route('/actions_related_to_the_roma_memorial', name: 'app_actions_related_to_the_roma_memorial')]
    public function index(): Response
    {
        return $this->render('actions_related_to_the_roma_memorial/index.html.twig', [
            'controller_name' => 'ActionsRelatedToTheRomaMemorial',
        ]);
    }
}
