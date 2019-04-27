<?php

namespace App\Repository;

use App\Entity\StudentGrade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StudentGrade|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudentGrade|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudentGrade[]    findAll()
 * @method StudentGrade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentGradeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StudentGrade::class);
    }

    // /**
    //  * @return StudentGrade[] Returns an array of StudentGrade objects
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
    public function findOneBySomeField($value): ?StudentGrade
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
