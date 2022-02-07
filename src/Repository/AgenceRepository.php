<?php

namespace App\Repository;

use App\Entity\Agence;
use App\Entity\Bank;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AgenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agence::class);
    }

    public function getAgences(){
        $db = $this->createQueryBuilder('a');
        $bank = new Bank;
        $db->select('a.NomAgence', 'a.Address', 'a.Phone', 'a.Ville', 'a.Statut', 'b.NomBank');
        $db->innerJoin(Bank::class,'b','a.IDBank=b.NomBank');
        $db->innerJoin(Region::class,'r','a.IDRegion=r.IDRegion');

        
        

        return $db->getQuery()->getResult();
    }

    public function getAgenceByID($id){
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT *, NomBank FROM agence
                    INNER JOIN bank on (agence.IDBank = bank.IDBank)
        
                WHERE agence.Statut='1' AND bank.Statut='1' AND agence.IDAgence=?";

        $req = $conn->prepare($sql);
        $req->bindValue(1,$id);
        $req->executeQuery();
    }
}