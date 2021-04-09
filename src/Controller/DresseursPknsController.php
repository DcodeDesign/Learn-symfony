<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DresseursPknsController extends AbstractController
{
    #[Route('/dresseurs/pkns', name: 'dresseurs_pkns')]
    public function index(): Response
    {
        return $this->render('dresseurs_pkns/index.html.twig', [
            'controller_name' => 'DresseursPknsController',
        ]);
    }

    #[Route('/dresseurs/pkns/insert', name: 'dresseurs_pkns_insert')]
    public function insert(): Response
    {
        return $this->render('dresseurs_pkns/insert.html.twig', [
            'controller_name' => 'DresseursPknsInsertController',
        ]);
    }

    #[Route('/dresseurs/pkns/delete', name: 'dresseurs_pkns_delete')]
    public function delete(): Response
    {
        return $this->render('dresseurs_pkns/delete.html.twig', [
            'controller_name' => 'DresseursPknsDeleteController',
        ]);
    }

    #[Route('/dresseurs/pkns/update', name: 'dresseurs_pkns_update')]
    public function update(): Response
    {
        return $this->render('dresseurs_pkns/update.html.twig', [
            'controller_name' => 'DresseursPknsUpdateController',
        ]);
    }
}
