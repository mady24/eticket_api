<?php
namespace App\Entity;

use App\Repository\TicketRepository;
use  Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TicketRepository::class)
 */
class Ticket{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $IDTicket;

    /**
     * @ORM\Column(type="integer")
     */
    private $IDAgence;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $IDUser;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="time")
     */
    private $Time;

    /**
     * @ORM\Column(type="integer")
     */
    private $Numero;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Scheduled;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Statut;

    /**
     * Get the value of IDTicket
     */ 
    public function getIDTicket()
    {
        return $this->IDTicket;
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
     * Get the value of IDUser
     */ 
    public function getIDUser()
    {
        return $this->IDUser;
    }

    /**
     * Set the value of IDUser
     *
     * @return  self
     */ 
    public function setIDUser($IDUser)
    {
        $this->IDUser = $IDUser;

        return $this;
    }

    /**
     * Get the value of Date
     */ 
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set the value of Date
     *
     * @return  self
     */ 
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Get the value of Time
     */ 
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Set the value of Time
     *
     * @return  self
     */ 
    public function setTime($Time)
    {
        $this->Time = $Time;

        return $this;
    }

    /**
     * Get the value of Numero
     */ 
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Set the value of Numero
     *
     * @return  self
     */ 
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;

        return $this;
    }

    /**
     * Get the value of Scheduled
     */ 
    public function getScheduled()
    {
        return $this->Scheduled;
    }

    /**
     * Set the value of Scheduled
     *
     * @return  self
     */ 
    public function setScheduled($Scheduled)
    {
        $this->Scheduled = $Scheduled;

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