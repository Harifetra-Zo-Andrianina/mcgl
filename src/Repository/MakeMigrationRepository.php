<?php

namespace App\Repository;

use App\Entity\MakeMigration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MakeMigration|null find($id, $lockMode = null, $lockVersion = null)
 * @method MakeMigration|null findOneBy(array $criteria, array $orderBy = null)
 * @method MakeMigration[]    findAll()
 * @method MakeMigration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MakeMigrationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MakeMigration::class);
    }

    // /**
    //  * @return MakeMigration[] Returns an array of MakeMigration objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MakeMigration
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
