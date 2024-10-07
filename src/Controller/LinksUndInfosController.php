<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LinksUndInfosController extends AbstractController
{
    #[Route('/links_und_infos', name: 'app_links_und_infos')]
    public function index(): Response
    {
        return $this->render('links_und_infos/index.html.twig', [
            'controller_name' => 'LinksUndInfos',
        ]);
    }
}
