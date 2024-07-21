<?php

namespace App\Repository;

use App\Entity\VeterinaryReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class VeterinaryReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VeterinaryReport::class);
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
    //     * @return VeterinaryReport[] Returns an array of VeterinaryReport objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?VeterinaryReport
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
