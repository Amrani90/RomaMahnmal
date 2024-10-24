<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OurStoryController extends AbstractController
{
    #[Route('/our_story', name: 'app_our_story')]
    public function index(): Response
    {
        return $this->render('our_story/index.html.twig', [
            'controller_name' => 'OurStory',
        ]);
    }
}
