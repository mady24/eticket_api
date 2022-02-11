<?php
namespace App\Entity;

use App\Repository\FileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FileRepository::class)
 */
class File{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $IDFile;

    /**
     * @ORM\Column(type="integer")
     */
    private $IDAgence;

    /**
     * @ORM\Column(type="integer")
     */
    private $Count;

    /**
     * @ORM\Column(type="integer")
     */
    private $CalledNumber;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateFile;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Statut;

    /**
     * Get the value of IDFile
     */ 
    public function getIDFile()
    {
        return $this->IDFile;
    }

    /**
     * Get the value of IDAgence
     */ 
    public function getIDAgence()
    {
        return $this->IDAgence;
    }

    /**
     * Set the value of IDAgence
     *
     * @return  self
     */ 
    public function setIDAgence($IDAgence)
    {
        $this->IDAgence = $IDAgence;

        return $this;
    }

    /**
     * Get the value of Count
     */ 
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * Set the value of Count
     *
     * @return  self
     */ 
    public function setCount($Count)
    {
        $this->Count = $Count;

        return $this;
    }

    /**
     * Get the value of CalledNumber
     */ 
    public function getCall()
    {
        return $this->CalledNumber;
    }

    /**
     * Set the value of CalledNumber
     *
     * @return  self
     */ 
    public function setCall($CalledNumber)
    {
        $this->CalledNumber = $CalledNumber;

        return $this;
    }

    /**
     * Get the value of DateFile
     */ 
    public function getDate()
    {
        return $this->DateFile;
    }

    /**
     * Set the value of DateFile
     *
     * @return  self
     */ 
    public function setDate($DateFile)
    {
        $date = new \DateTime($DateFile);
        $this->DateFile = $date;

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