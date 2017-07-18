<?php

namespace Nano\EpresseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peripherique
 *
 * @ORM\Table(name="peripherique")
 * @ORM\Entity(repositoryClass="Nano\EpresseBundle\Repository\PeripheriqueRepository")
 */
class Peripherique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="imei", type="string", length=25)
     */
    private $imei;

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=30)
     */
    private $mac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdd", type="datetime")
     */
    private $dateAdd;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="lastUse", type="string", length=255)
     */
    private $lastUse;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set imei
     *
     * @param string $imei
     *
     * @return Peripherique
     */
    public function setImei($imei)
    {
        $this->imei = $imei;

        return $this;
    }

    /**
     * Get imei
     *
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * Set mac
     *
     * @param string $mac
     *
     * @return Peripherique
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Peripherique
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Peripherique
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set lastUse
     *
     * @param string $lastUse
     *
     * @return Peripherique
     */
    public function setLastUse($lastUse)
    {
        $this->lastUse = $lastUse;

        return $this;
    }

    /**
     * Get lastUse
     *
     * @return string
     */
    public function getLastUse()
    {
        return $this->lastUse;
    }
}

