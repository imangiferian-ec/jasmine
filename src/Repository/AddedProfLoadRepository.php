<?php

namespace App\Repository;

use App\Entity\AddedProfLoad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AddedProfLoad|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddedProfLoad|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddedProfLoad[]    findAll()
 * @method AddedProfLoad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddedProfLoadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AddedProfLoad::class);
    }

    // /**
    //  * @return AddedProfLoad[] Returns an array of AddedProfLoad objects
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
    public function findOneBySomeField($value): ?AddedProfLoad
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
