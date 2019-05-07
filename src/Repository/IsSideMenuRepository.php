<?php

namespace App\Repository;

use App\Entity\IsSideMenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method IsSideMenu|null find($id, $lockMode = null, $lockVersion = null)
 * @method IsSideMenu|null findOneBy(array $criteria, array $orderBy = null)
 * @method IsSideMenu[]    findAll()
 * @method IsSideMenu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IsSideMenuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, IsSideMenu::class);
    }

    // /**
    //  * @return IsSideMenu[] Returns an array of IsSideMenu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IsSideMenu
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
