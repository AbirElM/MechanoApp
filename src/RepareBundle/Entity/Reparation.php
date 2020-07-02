<?php

namespace RepareBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparation
 *
 * @ORM\Table(name="reparation", indexes={@ORM\Index(name="license", columns={"license"})})
 * @ORM\Entity
 */
class Reparation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_rep;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var CarBundle\Entity\Car
     *
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="license", referencedColumnName="license")
     * })
     */
    private $license;

    /**
     * @return int
     */
    public function getIdRep()
    {
        return $this->id_rep;
    }

    /**
     * @param int $id_rep
     */
    public function setIdRep($id_rep)
    {
        $this->id_rep = $id_rep;
    }

    /**
     * @return bool
     */
    public function isState()
    {
        return $this->state;
    }

    /**
     * @param bool $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return CarBundle\Entity\Car
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param CarBundle\Entity\Car $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }
    public function __toString()
    {
        return $this->getDescription();
    }

}

