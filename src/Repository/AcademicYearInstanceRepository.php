<?php

namespace App\Repository;

use App\Entity\AcademicYearInstance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AcademicYearInstance|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcademicYearInstance|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcademicYearInstance[]    findAll()
 * @method AcademicYearInstance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcademicYearInstanceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AcademicYearInstance::class);
    }

    // /**
    //  * @return AcademicYearInstance[] Returns an array of AcademicYearInstance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AcademicYearInstance
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
