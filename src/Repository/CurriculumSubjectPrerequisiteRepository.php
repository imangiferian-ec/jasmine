<?php

namespace App\Repository;

use App\Entity\CurriculumSubjectPrerequisite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CurriculumSubjectPrerequisite|null find($id, $lockMode = null, $lockVersion = null)
 * @method CurriculumSubjectPrerequisite|null findOneBy(array $criteria, array $orderBy = null)
 * @method CurriculumSubjectPrerequisite[]    findAll()
 * @method CurriculumSubjectPrerequisite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CurriculumSubjectPrerequisiteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CurriculumSubjectPrerequisite::class);
    }

    // /**
    //  * @return CurriculumSubjectPrerequisite[] Returns an array of CurriculumSubjectPrerequisite objects
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
    public function findOneBySomeField($value): ?CurriculumSubjectPrerequisite
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
