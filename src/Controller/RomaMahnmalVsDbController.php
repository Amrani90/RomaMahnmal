<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RomaMahnmalVsDbController extends AbstractController
{
    #[Route('/roma_mahnmal_vs_db', name: 'app_roma_mahnmal_vs_db')]
    public function index(): Response
    {
        return $this->render('roma_mahnmal_vs_db/index.html.twig', [
            'controller_name' => 'RomaMahnmalVsDb',
        ]);
    }
}
