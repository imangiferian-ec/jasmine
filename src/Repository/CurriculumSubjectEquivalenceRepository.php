<?php

namespace App\Repository;

use App\Entity\CurriculumSubjectEquivalence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CurriculumSubjectEquivalence|null find($id, $lockMode = null, $lockVersion = null)
 * @method CurriculumSubjectEquivalence|null findOneBy(array $criteria, array $orderBy = null)
 * @method CurriculumSubjectEquivalence[]    findAll()
 * @method CurriculumSubjectEquivalence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CurriculumSubjectEquivalenceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CurriculumSubjectEquivalence::class);
    }

    // /**
    //  * @return CurriculumSubjectEquivalence[] Returns an array of CurriculumSubjectEquivalence objects
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
    public function findOneBySomeField($value): ?CurriculumSubjectEquivalence
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
