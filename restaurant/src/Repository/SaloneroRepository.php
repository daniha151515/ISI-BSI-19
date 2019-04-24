<?php

namespace App\Repository;

use App\Entity\Salonero;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Salonero|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salonero|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salonero[]    findAll()
 * @method Salonero[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaloneroRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Salonero::class);
    }

    // /**
    //  * @return Salonero[] Returns an array of Salonero objects
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
    public function findOneBySomeField($value): ?Salonero
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
