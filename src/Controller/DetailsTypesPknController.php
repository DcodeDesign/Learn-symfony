<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsTypesPknController extends AbstractController
{
    #[Route('/details/types/pkn', name: 'details_types_pkn')]
    public function index(): Response
    {
        return $this->render('types_pkn/details.html.twig', [
            'controller_name' => 'DetailsTypesPknController',
        ]);
    }
}
