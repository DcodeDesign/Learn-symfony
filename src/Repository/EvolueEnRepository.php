<?php

namespace App\Repository;

use App\Entity\EvolueEn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EvolueEn|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvolueEn|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvolueEn[]    findAll()
 * @method EvolueEn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvolueEnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvolueEn::class);
    }

    // /**
    //  * @return EvolueEn[] Returns an array of EvolueEn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EvolueEn
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
