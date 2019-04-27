<?php

namespace App\Repository;

use App\Entity\SubjectOffering;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SubjectOffering|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubjectOffering|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubjectOffering[]    findAll()
 * @method SubjectOffering[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubjectOfferingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SubjectOffering::class);
    }

    // /**
    //  * @return SubjectOffering[] Returns an array of SubjectOffering objects
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
    public function findOneBySomeField($value): ?SubjectOffering
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
