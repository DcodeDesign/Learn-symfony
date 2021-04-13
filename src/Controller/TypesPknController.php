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

    #[Route('/details/types/{id}', name: 'types_pkn_details')]
    public function details(): Response
    {
        return $this->render('types_pkn/details.html.twig', [
            'controller_name' => 'DetailsTypesPknController',
        ]);
    }

    #[Route('/types/insert', name: 'types_pkn_insert')]
    public function insert(): Response
    {
        return $this->render('types_pkn/insert.html.twig', [
            'controller_name' => 'TypesPknInsertController',
        ]);
    }

    #[Route('/types/delete/{id}', name: 'types_pkn_delete')]
    public function delete(): Response
    {
        return $this->render('types_pkn/delete.html.twig', [
            'controller_name' => 'TypesPknDeleteController',
        ]);
    }

    #[Route('/types/update/{id}', name: 'types_pkn_update')]
    public function update(): Response
    {
        return $this->render('types_pkn/update.html.twig', [
            'controller_name' => 'TypesPknUpdateController',
        ]);
    }
}
