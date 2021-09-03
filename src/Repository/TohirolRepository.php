<?php

namespace App\Repository;

use App\Entity\Tohirol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tohirol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tohirol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tohirol[]    findAll()
 * @method Tohirol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TohirolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tohirol::class);
    }

    // /**
    //  * @return Tohirol[] Returns an array of Tohirol objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tohirol
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
