<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsDresseursPknsController extends AbstractController
{
    #[Route('/details/dresseurs/pkns', name: 'details_dresseurs_pkns')]
    public function index(): Response
    {
        return $this->render('dresseurs_pkns/details.html.twig', [
            'controller_name' => 'DetailsDresseursPknsController',
        ]);
    }
}
