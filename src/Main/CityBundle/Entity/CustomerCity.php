<?php

namespace Main\CityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\BackendBundle\Entity\Customer;

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
     * @ORM\ManyToOne(targetEntity="Main\BackendBundle\Entity\Customer", inversedBy="customerCities")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Main\CityBundle\Entity\AllCities", inversedBy="customerCity")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=59)
     */
    private $cityName;

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
     * Set cityName.
     *
     * @param string $cityName
     *
     * @return CustomerCity
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName.
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
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
     * Set customer.
     *
     * @param Customer $customer
     *
     * @return CustomerCity
     */
    public function setCustomer(Customer $customer = null)
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
}
