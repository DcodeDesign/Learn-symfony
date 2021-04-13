<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    private $em;
    private $repo;

    public function __construct(EntityManagerInterface $em, UsersRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/users', name: 'users')]
    public function index(): Response
    {
        $allUsers = $this->repo->findAll();
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
            'users' => $allUsers

        ]);
    }

    #[Route('/users/details/{id<[0-9]+>}', name: 'users_details')]
    public function details(int $id): Response
    {
        $user = $this->repo->find($id);
        return $this->render('users/details.html.twig', [
            'user' => $user,
        ]);
    }

    /************************
        formulaire version 1
     ************************/
    #[Route('/users/insert/', name: 'users_insert')]
    public function insert(Request $req): Response
    {
        if ($req->isMethod("POST")) {
            $datasForm = $req->request->all();

            if($this->isCsrfTokenValid("56bbggsfgs787b6", $datasForm["_token"])) {
                $insertUser = new UsersOld;

                $insertUser->setNom($datasForm['nom']);
                $insertUser->setPrenom($datasForm['prenom']);
                $insertUser->setEmail($datasForm['email']);
                $insertUser->setAvatar($datasForm['avatar']);

                $this->em->persist($insertUser);
                $this->em->flush();

                return $this->redirectToRoute("users");
            }

        } else {
            return $this->render('users/insert.html.twig');
        }
    }

    /************************
    formulaire version 2

    #[Route('/users/insert/', name: 'users_insert')]
    public function insert(Request $req): Response
    {
        if ($req->isMethod("POST")) {
            $datasForm = $req->request->all();

            if($this->isCsrfTokenValid("56bbggsfgs787b6", $datasForm["_token"])) {
                $insertUser = new users;

                $insertUser->setNom($insertUser['nom']);
                $insertUser->setPrenom($insertUser['prenom']);
                $insertUser->setEmail($insertUser['email']);
                $insertUser->setAvatar($insertUser['avatar']);

                $this->em->persist($insertUser);
                $this->em->flush();

                return $this->redirectToRoute("users");
            }

        } else {
            return $this->render('users/insert.html.twig');
        }
    }
     ************************/

    /************************
    formulaire version 3

    #[Route('/users/insert/', name: 'users_insert')]
    public function insert(Request $req): Response
    {
    if ($req->isMethod("POST")) {
    $datasForm = $req->request->all();

    if($this->isCsrfTokenValid("56bbggsfgs787b6", $datasForm["_token"])) {
    $insertUser = new users;

    $insertUser->setNom($insertUser['nom']);
    $insertUser->setPrenom($insertUser['prenom']);
    $insertUser->setEmail($insertUser['email']);
    $insertUser->setAvatar($insertUser['avatar']);

    $this->em->persist($insertUser);
    $this->em->flush();

    return $this->redirectToRoute("users");
    }

    } else {
    return $this->render('users/insert.html.twig');
    }
    }
     ************************/

    /************************
    formulaire version 4

    #[Route('/users/insert/', name: 'users_insert')]
    public function insert(Request $req): Response
    {
    if ($req->isMethod("POST")) {
    $datasForm = $req->request->all();

    if($this->isCsrfTokenValid("56bbggsfgs787b6", $datasForm["_token"])) {
    $insertUser = new users;

    $insertUser->setNom($insertUser['nom']);
    $insertUser->setPrenom($insertUser['prenom']);
    $insertUser->setEmail($insertUser['email']);
    $insertUser->setAvatar($insertUser['avatar']);

    $this->em->persist($insertUser);
    $this->em->flush();

    return $this->redirectToRoute("users");
    }

    } else {
    return $this->render('users/insert.html.twig');
    }
    }
     ************************/

    /************************
    formulaire version 5

    #[Route('/users/insert/', name: 'users_insert')]
    public function insert(Request $req): Response
    {
    if ($req->isMethod("POST")) {
    $datasForm = $req->request->all();

    if($this->isCsrfTokenValid("56bbggsfgs787b6", $datasForm["_token"])) {
    $insertUser = new users;

    $insertUser->setNom($insertUser['nom']);
    $insertUser->setPrenom($insertUser['prenom']);
    $insertUser->setEmail($insertUser['email']);
    $insertUser->setAvatar($insertUser['avatar']);

    $this->em->persist($insertUser);
    $this->em->flush();

    return $this->redirectToRoute("users");
    }

    } else {
    return $this->render('users/insert.html.twig');
    }
    }
     ************************/



    #[Route('/users/update/{id<[0-9]+>}', name: 'users_update')]
    public function update(Request $req, int $id): Response
    {
        $updateUser = $this->repo->find($id);

        if ($req->isMethod("POST")) {
            $datasForm = $req->request->all();

            if($this->isCsrfTokenValid("56bbggsfgs787b6", $datasForm["_token"])) {
                $updateUser->setNom($datasForm['nom']);
                $updateUser->setPrenom($datasForm['prenom']);
                $updateUser->setEmail($datasForm['email']);
                $updateUser->setAvatar($datasForm['avatar']);

                $this->em->persist($updateUser);
                $this->em->flush();

                return $this->redirectToRoute("users");
            }

        } else {
            return $this->render('users/update.html.twig', [
                'controller_name' => 'UsersController',
                'user' => $updateUser,
            ]);
        }

    }

    #[Route('/users/delete/{id<[0-9]+>}', name: 'users_delete')]
    public function delete(int $id): Response
    {
        $user = $this->repo->find($id);
        $this->em->remove($user);
        $this->em->flush();

       /* return $this->render('users/delete.html.twig', [
            'controller_name' => 'UsersController',
        ]);*/

        return $this->redirectToRoute('users');

    }
}
