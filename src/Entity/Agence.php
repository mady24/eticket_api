<?php
namespace App\Entity;

use App\Repository\AgenceRepository;
use  Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $IDAgence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomAgence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $Phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $IDBank;

    /**
     * @ORM\Column(type="integer")
     */
    private $IDRegion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $IDVille;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Statut;

    public function getIDAgence(): ?int
    {
        return $this->IDAgence;
    }

    public function getNomAgence(): ?string
    {
        return $this->NomAgence;
    }

    public function setNomAgence($NomAgence): self
    {
        $this->NomAgence = $NomAgence;
        return $this;
    }

    public function getIDBank(): ?int
    {
        return $this->IDBank;
    }

    public function setIDBank($Bank): self
    {
        $this->IDBank = $Bank;
        return $this;
    }

    public function getIDRegion(): ?int
    {
        return $this->IDRegion;
    }

    public function setIDRegion(int $Region): self
    {
        $this->IDRegion = $Region;
        return $this;
    }

    public function getIDVille(): ?int
    {
        return $this->IDVille;
    }

    public function setIDVille(int $Ville):self
    {
        $this->IDVille = $Ville;
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

    /**
     * Get the value of Address
     */ 
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set the value of Address
     *
     * @return  self
     */ 
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Get the value of Phone
     */ 
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set the value of Phone
     *
     * @return  self
     */ 
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }
}