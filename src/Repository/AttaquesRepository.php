<?php

namespace App\Repository;

use App\Entity\Attaques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Attaques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attaques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Attaques[]    findAll()
 * @method Attaques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttaquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Attaques::class);
    }

    // /**
    //  * @return Attaques[] Returns an array of Attaques objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Attaques
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
