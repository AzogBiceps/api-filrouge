<?php

namespace App\Repository;

use App\Entity\StepTutorial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StepTutorial|null find($id, $lockMode = null, $lockVersion = null)
 * @method StepTutorial|null findOneBy(array $criteria, array $orderBy = null)
 * @method StepTutorial[]    findAll()
 * @method StepTutorial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepTutorialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StepTutorial::class);
    }

    // /**
    //  * @return StepTutorial[] Returns an array of StepTutorial objects
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
    public function findOneBySomeField($value): ?StepTutorial
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
