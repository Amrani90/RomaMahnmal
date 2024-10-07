<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnotherCrimeOnRomaController extends AbstractController
{
    #[Route('/another_crime_on_roma', name: 'app_another_crime_on_roma')]
    public function index(): Response
    {
        return $this->render('another_crime_on_roma/index.html.twig', [
            'controller_name' => 'AnotherCrimeOnRoma',
        ]);
    }
}
