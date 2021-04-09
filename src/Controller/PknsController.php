<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PknsController extends AbstractController
{
    #[Route('/', name: 'pkns')]
    public function index(): Response
    {
        return $this->render('pkns/index.html.twig', [
            'controller_name' => 'PknsController',
        ]);
    }

    #[Route('/pkns/insert', name: 'pkns_insert')]
    public function insert(): Response
    {
        return $this->render('pkns/insert.html.twig', [
            'controller_name' => 'PknsInsertController',
        ]);
    }

    #[Route('/pkns/delete', name: 'pkns_delete')]
    public function delete(): Response
    {
        return $this->render('pkns/delete.html.twig', [
            'controller_name' => 'PknsDeleteController',
        ]);
    }

    #[Route('/pkns/update', name: 'pkns_update')]
    public function update(): Response
    {
        return $this->render('pkns/update.html.twig', [
            'controller_name' => 'PknsUpdateController',
        ]);
    }
}
