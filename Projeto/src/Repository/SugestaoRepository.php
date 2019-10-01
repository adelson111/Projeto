<?php

namespace App\Repository;

use App\Entity\Sugestao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Sugestao|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sugestao|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sugestao[]    findAll()
 * @method Sugestao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SugestaoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sugestao::class);
    }

    // /**
    //  * @return Sugestao[] Returns an array of Sugestao objects
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
    public function findOneBySomeField($value): ?Sugestao
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
