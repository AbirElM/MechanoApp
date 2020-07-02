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
//    /**
//     * @return mixed
//     */
//    public function getCin()
//    {
//        return $this->cin;
//    }
//
//    /**
//     * @param mixed $cin
//     */
//    public function setCin($cin)
//    {
//        $this->cin = $cin;
//    }
//    /**
//     * @var int
//     */
//    private $id;
//
//    /**
//     * @ORM\Column(type="string")
//     */
//    private $cin;
//
//
//    /**
//     * @var string
//     */
//    private $model;
//
//    /**
//     * @var string
//     */
//    private $license;
//
//    /**
//     * @var string
//     */
//    private $year;
//
//    /**
//     * @var string
//     */
//    private $ownerLN;
//
//    /**
//     * @var string
//     */
//    private $ownerFN;
//
//
//    /**
//     * Get id
//     *
//     * @return int
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set model
//     *
//     * @param string $model
//     *
//     * @return Car
//     */
//    public function setModel($model)
//    {
//        $this->model = $model;
//
//        return $this;
//    }
//
//    /**
//     * Get model
//     *
//     * @return string
//     */
//    public function getModel()
//    {
//        return $this->model;
//    }
//
//    /**
//     * Set license
//     *
//     * @param string $license
//     *
//     * @return Car
//     */
//    public function setLicense($license)
//    {
//        $this->license = $license;
//
//        return $this;
//    }
//
//    /**
//     * Get license
//     *
//     * @return string
//     */
//    public function getLicense()
//    {
//        return $this->license;
//    }
//
//    /**
//     * Set year
//     *
//     * @param string $year
//     *
//     * @return Car
//     */
//    public function setYear($year)
//    {
//        $this->year = $year;
//
//        return $this;
//    }
//
//    /**
//     * Get year
//     *
//     * @return string
//     */
//    public function getYear()
//    {
//        return $this->year;
//    }
//
//    /**
//     * Set ownerLN
//     *
//     * @param string $ownerLN
//     *
//     * @return Car
//     */
//    public function setOwnerLN($ownerLN)
//    {
//        $this->ownerLN = $ownerLN;
//
//        return $this;
//    }
//
//    /**
//     * Get ownerLN
//     *
//     * @return string
//     */
//    public function getOwnerLN()
//    {
//        return $this->ownerLN;
//    }
//
//    /**
//     * Set ownerFN
//     *
//     * @param string $ownerFN
//     *
//     * @return Car
//     */
//    public function setOwnerFN($ownerFN)
//    {
//        $this->ownerFN = $ownerFN;
//
//        return $this;
//    }
//
//    /**
//     * Get ownerFN
//     *
//     * @return string
//     */
//    public function getOwnerFN()
//    {
//        return $this->ownerFN;
//    }

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $license;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255, nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_LN", type="string", length=255, nullable=false)
     */
    private $ownerLn;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_FN", type="string", length=255, nullable=false)
     */
    private $ownerFn;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=false)
     */
    private $cin;

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getOwnerLn()
    {
        return $this->ownerLn;
    }

    /**
     * @param string $ownerLn
     */
    public function setOwnerLn($ownerLn)
    {
        $this->ownerLn = $ownerLn;
    }

    /**
     * @return string
     */
    public function getOwnerFn()
    {
        return $this->ownerFn;
    }

    /**
     * @param string $ownerFn
     */
    public function setOwnerFn($ownerFn)
    {
        $this->ownerFn = $ownerFn;
    }

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }
    public function __toString() {
        return $this->license;
    }

}

