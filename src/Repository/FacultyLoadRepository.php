<?php

namespace App\Repository;

use App\Entity\FacultyLoad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FacultyLoad|null find($id, $lockMode = null, $lockVersion = null)
 * @method FacultyLoad|null findOneBy(array $criteria, array $orderBy = null)
 * @method FacultyLoad[]    findAll()
 * @method FacultyLoad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FacultyLoadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FacultyLoad::class);
    }

    // /**
    //  * @return FacultyLoad[] Returns an array of FacultyLoad objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FacultyLoad
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
