<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsPknController extends AbstractController
{
    #[Route('/details/pkn', name: 'details_pkn')]
    public function index(): Response
    {
        return $this->render('pkns/details.html.twig', [
            'controller_name' => 'DetailsPknController',
        ]);
    }

    #[Route('/details/pkn/insert', name: 'details_pkn_insert')]
    public function insert(): Response
    {
        return $this->render('details_pkn/insert.html.twig', [
            'controller_name' => 'DetailsPknInsertController',
        ]);
    }

    #[Route('/details/pkn/delete', name: 'details_pkn_delete')]
    public function delete(): Response
    {
        return $this->render('details_pkn/delete.html.twig', [
            'controller_name' => 'DetailsPknDeletePknController',
        ]);
    }

    #[Route('/details/pkn/update', name: 'details_pkn_update')]
    public function update(): Response
    {
        return $this->render('details_pkn/update.html.twig', [
            'controller_name' => 'DetailsPknUpdateController',
        ]);
    }
}
