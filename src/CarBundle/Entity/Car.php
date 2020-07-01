<?php

namespace CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 * @ORM\Entity
 * @ORM\Table(name="car")
 */

class Car
{
    /**
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $cin;
    /**
     * @ORM\Column(type="string")
     */
    private $test;


    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $license;

    /**
     * @var string
     */
    private $year;

    /**
     * @var string
     */
    private $ownerLN;

    /**
     * @var string
     */
    private $ownerFN;


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
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set license
     *
     * @param string $license
     *
     * @return Car
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * Get license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set ownerLN
     *
     * @param string $ownerLN
     *
     * @return Car
     */
    public function setOwnerLN($ownerLN)
    {
        $this->ownerLN = $ownerLN;

        return $this;
    }

    /**
     * Get ownerLN
     *
     * @return string
     */
    public function getOwnerLN()
    {
        return $this->ownerLN;
    }

    /**
     * Set ownerFN
     *
     * @param string $ownerFN
     *
     * @return Car
     */
    public function setOwnerFN($ownerFN)
    {
        $this->ownerFN = $ownerFN;

        return $this;
    }

    /**
     * Get ownerFN
     *
     * @return string
     */
    public function getOwnerFN()
    {
        return $this->ownerFN;
    }
}

