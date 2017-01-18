<?php

namespace Main\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\CityBundle\Entity\CustomerCity;

/**
 * Point.
 */
class Point
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="logitude", type="float")
     */
    private $logitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * Set logitude.
     *
     * @param float $logitude
     *
     * @return CustomerCity
     */
    public function setLogitude($logitude)
    {
        $this->logitude = $logitude;

        return $this;
    }

    /**
     * Get logitude.
     *
     * @return float
     */
    public function getLogitude()
    {
        return $this->logitude;
    }

    /**
     * Set latitude.
     *
     * @param float $latitude
     *
     * @return CustomerCity
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude.
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
