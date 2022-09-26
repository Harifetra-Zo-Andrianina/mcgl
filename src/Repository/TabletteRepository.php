<?php

namespace App\Repository;

use App\Entity\Tablette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tablette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tablette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tablette[]    findAll()
 * @method Tablette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tablette::class);
    }

    // /**
    //  * @return Tablette[] Returns an array of Tablette objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tablette
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
