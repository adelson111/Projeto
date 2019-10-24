<?php

namespace App\Repository;

use App\Entity\Relevancia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Relevancia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Relevancia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Relevancia[]    findAll()
 * @method Relevancia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RelevanciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Relevancia::class);
    }

    // /**
    //  * @return Relevancia[] Returns an array of Relevancia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Relevancia
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
