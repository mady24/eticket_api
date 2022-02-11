<?php

namespace App\Repository;

use App\Entity\Agence;
use App\Entity\Bank;
use App\Entity\Region;
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
        $db
            ->select('a.IDAgence', 'a.NomAgence', 'a.Address', 'a.Phone', 'a.Statut', 'b.NomBank', 'r.NomRegion')
                ->innerJoin(Bank::class,'b','WITH','a.IDBank=b.IDBank')
                ->innerJoin(Region::class,'r','WITH','a.IDRegion=r.IDRegion')
            ->where("a.Statut = '1'");

        return $db->getQuery()->getResult();
    }

    public function getAgenceByID($id){
        $db = $this->createQueryBuilder('a');
        $db
            ->select('a.IDAgence', 'a.NomAgence', 'a.Address', 'a.Phone', 'a.Statut', 'b.NomBank', 'r.NomRegion')
                ->innerJoin(Bank::class,'b','WITH','a.IDBank=b.IDBank')
                ->innerJoin(Region::class,'r','WITH','a.IDRegion=r.IDRegion')
            ->where("a.Statut = '1'")
            ->andWhere("a.IDAgence = ".$id);
        
        return $db->getQuery()->getResult();
    }
    
    public function getAgenceByBank($id){
        $db = $this->createQueryBuilder('a');
        $db
            ->select('a.IDAgence', 'a.NomAgence', 'a.Address', 'a.Phone', 'a.Statut', 'r.NomRegion')
                ->innerJoin(Region::class,'r','WITH','a.IDRegion=r.IDRegion')
            ->where("a.Statut = '1'")
            ->andWhere("a.IDBank = ".$id);
        
        return $db->getQuery()->getResult();
    }
    
    public function getAgenceByBankRegion($id,$region){
        $db = $this->createQueryBuilder('a');
        $db
            ->select('a.IDAgence', 'a.NomAgence', 'a.Address', 'a.Phone', 'a.Statut', 'r.NomRegion')
                ->innerJoin(Region::class,'r','WITH','a.IDRegion=r.IDRegion')
            ->where("a.Statut = '1'")
            ->andWhere("a.IDBank = ".$id." and a.IDRegion = ".$region);
        
        return $db->getQuery()->getResult();
    }
}