<?php

namespace Main\CityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\MapBundle\Entity\Point;

/**
 * CustomerCity.
 *
 * @ORM\Table(name="customer_city")
 * @ORM\Entity(repositoryClass="Main\CityBundle\Repository\CustomerCityRepository")
 */
class CustomerCity
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
     * @ORM\OneToOne(targetEntity="Main\MapBundle\Entity\Point")
     * @ORM\JoinColumn(name="map_point_id", referencedColumnName="id")
     */
    private $point;

    /**
     * @var string
     *
     * @ORM\Column(name="city_brief", type="text", nullable=true)
     */
    private $cityBrief;

    /**
     * @var bool
     *
     * @ORM\Column(name="current_city", type="boolean")
     */
    private $currentCity;

    /**
     * @var bool
     *
     * @ORM\Column(name="visited_city", type="boolean")
     */
    private $visitedCity;

    /**
     * @var bool
     *
     * @ORM\Column(name="lived_city", type="boolean")
     */
    private $livedCity;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cityBrief.
     *
     * @param string $cityBrief
     *
     * @return CustomerCity
     */
    public function setCityBrief($cityBrief)
    {
        $this->cityBrief = $cityBrief;

        return $this;
    }

    /**
     * Get cityBrief.
     *
     * @return string
     */
    public function getCityBrief()
    {
        return $this->cityBrief;
    }

    /**
     * Set currentCity.
     *
     * @param bool $currentCity
     *
     * @return CustomerCity
     */
    public function setCurrentCity($currentCity)
    {
        $this->currentCity = $currentCity;

        return $this;
    }

    /**
     * Get currentCity.
     *
     * @return bool
     */
    public function getCurrentCity()
    {
        return $this->currentCity;
    }

    /**
     * Set visitedCity.
     *
     * @param bool $visitedCity
     *
     * @return CustomerCity
     */
    public function setVisitedCity($visitedCity)
    {
        $this->visitedCity = $visitedCity;

        return $this;
    }

    /**
     * Get visitedCity.
     *
     * @return bool
     */
    public function getVisitedCity()
    {
        return $this->visitedCity;
    }

    /**
     * Set livedCity.
     *
     * @param bool $livedCity
     *
     * @return CustomerCity
     */
    public function setLivedCity($livedCity)
    {
        $this->livedCity = $livedCity;

        return $this;
    }

    /**
     * Get livedCity.
     *
     * @return bool
     */
    public function getLivedCity()
    {
        return $this->livedCity;
    }

    /**
     * Set point.
     *
     * @param \Main\MapBundle\Entity\Point $point
     *
     * @return CustomerCity
     */
    public function setPoint(Point $point = null)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point.
     *
     * @return \Main\MapBundle\Entity\Point
     */
    public function getPoint()
    {
        return $this->point;
    }
}
