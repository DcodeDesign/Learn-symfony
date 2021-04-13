<?php

namespace App\Controller;

use App\Repository\PokemonsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PknsController extends AbstractController
{

    private $em;
    private $repo;

    public function __construct(EntityManagerInterface $em, PokemonsRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/', name: 'pkns')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $allPkns = $this->repo->findAll();
        return $this->render('pkns/index.html.twig', [
            'controller_name' => 'PknsController',
            'allPkns' => $allPkns
        ]);
    }

    #[Route('/details/pkn/{id}', name: 'pkn_details')]
    public function details(): Response
    {
        return $this->render('pkns/details.html.twig', [
            'controller_name' => 'DetailsPknController',
        ]);
    }

    #[Route('/pkns/insert', name: 'pkns_insert')]
    public function insert(): Response
    {
        return $this->render('pkns/insert.html.twig', [
            'controller_name' => 'PknsInsertController',
        ]);
    }

    #[Route('/pkns/delete/{id}', name: 'pkns_delete')]
    public function delete(): Response
    {
        return $this->render('pkns/delete.html.twig', [
            'controller_name' => 'PknsDeleteController',
        ]);
    }

    #[Route('/pkns/update/{id}', name: 'pkns_update')]
    public function update(): Response
    {
        return $this->render('pkns/update.html.twig', [
            'controller_name' => 'PknsUpdateController',
        ]);
    }
}
