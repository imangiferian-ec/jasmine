<?php

namespace App\Repository;

use App\Entity\StudentExaminee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StudentExaminee|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudentExaminee|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudentExaminee[]    findAll()
 * @method StudentExaminee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentExamineeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StudentExaminee::class);
    }

    // /**
    //  * @return StudentExaminee[] Returns an array of StudentExaminee objects
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
    public function findOneBySomeField($value): ?StudentExaminee
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
