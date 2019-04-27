<?php

namespace App\Repository;

use App\Entity\CurriculumSubject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CurriculumSubject|null find($id, $lockMode = null, $lockVersion = null)
 * @method CurriculumSubject|null findOneBy(array $criteria, array $orderBy = null)
 * @method CurriculumSubject[]    findAll()
 * @method CurriculumSubject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CurriculumSubjectRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CurriculumSubject::class);
    }

    // /**
    //  * @return CurriculumSubject[] Returns an array of CurriculumSubject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CurriculumSubject
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
