<?php

namespace App\Repository;

use App\Entity\Consequence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Consequence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Consequence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Consequence[]    findAll()
 * @method Consequence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsequenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Consequence::class);
    }

    // /**
    //  * @return Consequence[] Returns an array of Consequence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Consequence
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
