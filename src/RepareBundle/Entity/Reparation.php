<?php


namespace RepareBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reparation")
 */
class Reparation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id_rep;

    /**
     * @ORM\Column(type="boolean")
     */
    private $state;

    /**
     * @ORM\Column(type="string",unique=true)
     */
    /**
     * @ORM\ManyToOne(targetEntity="CarBundle\Entity\Car")
     * @ORM\JoinColumn(name="license",referencedColumnName="license",nullable=false,onDelete="CASCADE")
     */
    private $license;

    /**
     * @ORM\Column(type="string")
     */
    /**
     * @ORM\ManyToOne(targetEntity="CarBundle\Entity\Car")
     * @ORM\JoinColumn(name="cin",referencedColumnName="cin",nullable=false,onDelete="CASCADE")
     */
    private $cin;


    /**
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }



    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param mixed $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

}