<?php

namespace App\Repository;

use App\Entity\RolesUsuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RolesUsuario>
 *
 * @method RolesUsuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method RolesUsuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method RolesUsuario[]    findAll()
 * @method RolesUsuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RolesUsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RolesUsuario::class);
    }

//    /**
//     * @return RolesUsuario[] Returns an array of RolesUsuario objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RolesUsuario
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
