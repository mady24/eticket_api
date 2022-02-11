<?php

namespace App\Repository;

use App\Entity\File;
use App\Entity\Agence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, File::class);
    }

    public function getFiles()
    {
        $db = $this->createQueryBuilder('f');

        $db
            ->select('f.IDFile', 'f.Count', 'f.CalledNumber', 'f.IDAgence', 'f.DateFile', 'a.NomAgence')
                ->innerJoin(Agence::class, 'a', 'WITH', 'f.IDAgence = a.IDAgence')
            ->where("f.Statut = '1'");

        return $db->getQuery()->getResult();
    }
    public function getFileByID($id)
    {
        $db = $this->createQueryBuilder('f');

        $db
            ->select('f.IDFile', 'f.Count', 'f.CalledNumber', 'f.IDAgence', 'f.DateFile', 'a.NomAgence')
                ->innerJoin(Agence::class, 'a', 'WITH', 'f.IDAgence = a.IDAgence')
            ->where("f.Statut = '1'")
            ->andWhere('f.IDFile = '.$id);

        return $db->getQuery()->getResult();
    }
}