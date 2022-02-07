<?php
namespace App\Entity;

use App\Repository\BankRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BankRepository::class)
 */
class Bank{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $IDBank;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomBank;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $Phone;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Statut;

    


    /**
     * Get the value of IDBank
     */ 
    public function getIDBank()
    {
        return $this->IDBank;
    }

    /**
     * Get the value of NomBank
     */ 
    public function getNomBank()
    {
        return $this->NomBank;
    }

    /**
     * Set the value of NomBank
     *
     * @return  self
     */ 
    public function setNomBank($NomBank)
    {
        $this->NomBank = $NomBank;

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

    /**
     * Get the value of Statut
     */ 
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * Set the value of Statut
     *
     * @return  self
     */ 
    public function setStatut($Statut)
    {
        $this->Statut = $Statut;

        return $this;
    }
}