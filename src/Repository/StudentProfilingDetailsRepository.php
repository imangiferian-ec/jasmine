<?php

namespace App\Repository;

use App\Entity\StudentProfilingDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StudentProfilingDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudentProfilingDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudentProfilingDetails[]    findAll()
 * @method StudentProfilingDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentProfilingDetailsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StudentProfilingDetails::class);
    }

    // /**
    //  * @return StudentProfilingDetails[] Returns an array of StudentProfilingDetails objects
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
    public function findOneBySomeField($value): ?StudentProfilingDetails
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
