<?php

namespace App\Repository;

use App\Entity\UserHasSortie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserHasSortie|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserHasSortie|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserHasSortie[]    findAll()
 * @method UserHasSortie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserHasSortieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserHasSortie::class);
    }

    // /**
    //  * @return UserHasSortie[] Returns an array of UserHasSortie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserHasSortie
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
