<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypesPknController extends AbstractController
{
    #[Route('/types/pkn', name: 'types_pkn')]
    public function index(): Response
    {
        return $this->render('types_pkn/index.html.twig', [
            'controller_name' => 'TypesPknController',
        ]);
    }

    #[Route('/types/pkn/insert', name: 'types_pkn_insert')]
    public function insert(): Response
    {
        return $this->render('types_pkn/insert.html.twig', [
            'controller_name' => 'TypesPknInsertController',
        ]);
    }

    #[Route('/types/pkn/delete', name: 'types_pkn_delete')]
    public function delete(): Response
    {
        return $this->render('types_pkn/delete.html.twig', [
            'controller_name' => 'TypesPknDeleteController',
        ]);
    }

    #[Route('/types/pkn/update', name: 'types_pkn_update')]
    public function update(): Response
    {
        return $this->render('types_pkn/update.html.twig', [
            'controller_name' => 'TypesPknUpdateController',
        ]);
    }
}
