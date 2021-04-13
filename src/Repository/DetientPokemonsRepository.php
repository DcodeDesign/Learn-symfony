<?php

namespace App\Repository;

use App\Entity\DetientPokemons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetientPokemons|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetientPokemons|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetientPokemons[]    findAll()
 * @method DetientPokemons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetientPokemonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetientPokemons::class);
    }

    // /**
    //  * @return DetientPokemons[] Returns an array of DetientPokemons objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetientPokemons
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
