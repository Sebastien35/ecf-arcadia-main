<?php

namespace App\Repository;

use App\Entity\AnimalFeeding;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnimalFeeding>
 */
class AnimalFeedingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnimalFeeding::class);
    }

    public function findAllFoodOptions(): array
    {
        $qb = $this->createQueryBuilder('vr')
            ->select('DISTINCT vr.food')
            ->getQuery();

        $results = $qb->getResult();
        $foods = [];
        foreach ($results as $result) {
            $foods[$result['food']] = $result['food'];
        }

        return $foods;
    }


    //    /**
    //     * @return AnimalFeeding[] Returns an array of AnimalFeeding objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AnimalFeeding
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
