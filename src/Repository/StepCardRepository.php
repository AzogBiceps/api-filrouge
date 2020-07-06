<?php

namespace App\Repository;

use App\Entity\StepCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StepCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method StepCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method StepCard[]    findAll()
 * @method StepCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StepCard::class);
    }

    // /**
    //  * @return StepCard[] Returns an array of StepCard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StepCard
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
