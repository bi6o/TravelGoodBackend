<?php

namespace Main\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\BackendBundle\Entity\Customer;
use Main\CityBundle\Entity\CustomerCity;
use Main\CityBundle\Entity\AllCities;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
