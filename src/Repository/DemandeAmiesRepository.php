<?php

namespace App\Repository;

use App\Entity\DemandeAmies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeAmies>
 *
 * @method DemandeAmies|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeAmies|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeAmies[]    findAll()
 * @method DemandeAmies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeAmiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeAmies::class);
    }

//    /**
//     * @return DemandeAmies[] Returns an array of DemandeAmies objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DemandeAmies
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
