<?php

namespace App\Repository;

use App\Entity\Intrant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Intrant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Intrant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Intrant[]    findAll()
 * @method Intrant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntrantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Intrant::class);
    }

    // /**
    //  * @return Intrant[] Returns an array of Intrant objects
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
    public function findOneBySomeField($value): ?Intrant
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
