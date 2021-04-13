<?php

namespace App\Repository;

use App\Entity\EstType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EstType|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstType|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstType[]    findAll()
 * @method EstType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstType::class);
    }

    // /**
    //  * @return EstType[] Returns an array of EstType objects
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
    public function findOneBySomeField($value): ?EstType
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
