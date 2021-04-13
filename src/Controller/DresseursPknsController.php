<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DresseursPknsController extends AbstractController
{
    #[Route('/dresseurs', name: 'dresseurs_pkns')]
    public function index(): Response
    {
        return $this->render('dresseurs_pkns/index.html.twig', [
            'controller_name' => 'DresseursPknsController',
        ]);
    }

    #[Route('/details/dresseurs/{id}', name: 'dresseurs_pkns_details')]
    public function details(): Response
    {
        return $this->render('dresseurs_pkns/details.html.twig', [
            'controller_name' => 'DetailsDresseursPknsController',
        ]);
    }

    #[Route('/dresseurs/insert', name: 'dresseurs_pkns_insert')]
    public function insert(): Response
    {
        return $this->render('dresseurs_pkns/insert.html.twig', [
            'controller_name' => 'DresseursPknsInsertController',
        ]);
    }

    #[Route('/dresseurs/delete/{id}', name: 'dresseurs_pkns_delete')]
    public function delete(): Response
    {
        return $this->render('dresseurs_pkns/delete.html.twig', [
            'controller_name' => 'DresseursPknsDeleteController',
        ]);
    }

    #[Route('/dresseurs/update/{id}', name: 'dresseurs_pkns_update')]
    public function update(): Response
    {
        return $this->render('dresseurs_pkns/update.html.twig', [
            'controller_name' => 'DresseursPknsUpdateController',
        ]);
    }
}
