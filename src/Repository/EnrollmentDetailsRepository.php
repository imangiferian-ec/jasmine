<?php

namespace App\Repository;

use App\Entity\EnrollmentDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EnrollmentDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnrollmentDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnrollmentDetails[]    findAll()
 * @method EnrollmentDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnrollmentDetailsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EnrollmentDetails::class);
    }

    // /**
    //  * @return EnrollmentDetails[] Returns an array of EnrollmentDetails objects
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
    public function findOneBySomeField($value): ?EnrollmentDetails
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
