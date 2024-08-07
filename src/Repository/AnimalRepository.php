<?php

namespace App\Repository;

use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Animal>
 *
 * @method Animal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Animal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Animal[]    findAll()
 * @method Animal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animal::class);
    }

    public function findByRace(string $race): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.race = :race')
            ->setParameter('race', $race)
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByHabitat(int $habitatId): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.habitat = :habitatId')
            ->setParameter('habitatId', $habitatId)
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

}
