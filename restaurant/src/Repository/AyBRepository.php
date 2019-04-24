<?php

namespace App\Repository;

use App\Entity\AyB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AyB|null find($id, $lockMode = null, $lockVersion = null)
 * @method AyB|null findOneBy(array $criteria, array $orderBy = null)
 * @method AyB[]    findAll()
 * @method AyB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AyBRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AyB::class);
    }

    // /**
    //  * @return AyB[] Returns an array of AyB objects
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
    public function findOneBySomeField($value): ?AyB
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
