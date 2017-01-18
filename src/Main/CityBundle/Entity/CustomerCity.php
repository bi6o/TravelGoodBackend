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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="\Main\BackendBundle\Entity\Customer", inversedBy="customerCities")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="\Main\CityBundle\Entity\AllCities")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrived", type="datetime")
     */
    private $dateArrived;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_departed", type="datetime")
     */
    private $dateDeparted;

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
     * @ORM\OneToOne(targetEntity="Main\PhotoBundle\Entity\Album", nullable=true)
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    private $album;

    public function __construct()
    {
        $this->albums = new ArrayCollection();
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

    /**
     * Set customer.
     *
     * @param \Main\BackendBundle\Entity\Customer $customer
     *
     * @return CustomerCity
     */
    public function setCustomer(\Main\BackendBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \Main\BackendBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set city.
     *
     * @param \Main\CityBundle\Entity\AllCities $city
     *
     * @return CustomerCity
     */
    public function setCity(AllCities $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return \Main\CityBundle\Entity\AllCities
     */
    public function getCity()
    {
        return $this->city;
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

    /**
     * Set dateArrived.
     *
     * @param \DateTime $dateArrived
     *
     * @return CustomerCity
     */
    public function setDateArrived($dateArrived)
    {
        $this->dateArrived = $dateArrived;

        return $this;
    }

    /**
     * Get dateArrived.
     *
     * @return \DateTime
     */
    public function getDateArrived()
    {
        return $this->dateArrived;
    }

    /**
     * Set dateDeparted.
     *
     * @param \DateTime $dateDeparted
     *
     * @return CustomerCity
     */
    public function setDateDeparted($dateDeparted)
    {
        $this->dateDeparted = $dateDeparted;

        return $this;
    }

    /**
     * Get dateDeparted.
     *
     * @return \DateTime
     */
    public function getDateDeparted()
    {
        return $this->dateDeparted;
    }
}
