<?php

namespace App\Repository;

use App\Entity\MatchesEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MatchesEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchesEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchesEntity[]    findAll()
 * @method MatchesEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchesEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MatchesEntity::class);
    }

//    /**
//     * @return MatchesEntity[] Returns an array of MatchesEntity objects
//     */
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
    public function findOneBySomeField($value): ?MatchesEntity
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
