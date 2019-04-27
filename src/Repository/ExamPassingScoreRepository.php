<?php

namespace App\Repository;

use App\Entity\ExamPassingScore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ExamPassingScore|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamPassingScore|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamPassingScore[]    findAll()
 * @method ExamPassingScore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamPassingScoreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ExamPassingScore::class);
    }

    // /**
    //  * @return ExamPassingScore[] Returns an array of ExamPassingScore objects
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
    public function findOneBySomeField($value): ?ExamPassingScore
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
