<?php

namespace App\Repository;

use App\Entity\TeamEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @method TeamEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamEntity[]    findAll()
 * @method TeamEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TeamEntity::class);
    }

//    /**
//     * @return TeamEntity[] Returns an array of TeamEntity objects
//     */
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
    public function findOneBySomeField($value): ?TeamEntity
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
