<?php
namespace App\Entity;

use App\Repository\RegionRepository;
use  Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegionRepository::class)
 */
class Region
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $IDRegion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomRegion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Statut;

    public function getIDRegion(): ?int
    {
        return $this->IDRegion;
    }

    public function getNomRegion(): ?String
    {
        return $this->NomRegion;
    }

    public function setNomRegion(string $NomRegion): self
    {
        $this->NomRegion = $NomRegion;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->Statut;
    }

    public function setStatut(bool $Statut): self
    {
        $this->Statut = $Statut;
        return $this;
    }

    
}