<?php

namespace Main\TripBundle\Entity;

use Main\MapBundle\Entity\Point;
use Main\CityBundle\Entity\AllCities;

/**
 * TripCity
 */
class TripCity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var array
	 *
	 * Each segment represents the information from the current city of the trip to the next
	 * If the Trip consists of ONE city, there should be no segment
	 * Keys: Duration, Transportation, Comment
     */
    private $segment;


	private $trip;


	/**
	 * @var \Main\CityBundle\Entity\CustomerCity
	 */
	private $city;


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
     * Set segment
     *
     * @param array $segment
     *
     * @return TripCity
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return array
     */
    public function getSegment()
    {
        return $this->segment;
    }


    /**
     * Set trip
     *
     * @param \Main\TripBundle\Entity\Trip $trip
     *
     * @return TripCity
     */
    public function setTrip(\Main\TripBundle\Entity\Trip $trip = null)
    {
        $this->trip = $trip;

        return $this;
    }

    /**
     * Get trip
     *
     * @return \Main\TripBundle\Entity\Trip
     */
    public function getTrip()
    {
        return $this->trip;
    }

    /**
     * Set city
     *
     * @param \Main\CityBundle\Entity\CustomerCity $city
     *
     * @return TripCity
     */
    public function setCity(\Main\CityBundle\Entity\CustomerCity $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Main\CityBundle\Entity\CustomerCity
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @var \DateTime
     */
    private $dateCreated;


    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return TripCity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
    /**
     * @var integer
     */
    private $order;


    /**
     * Set order
     *
     * @param integer $order
     *
     * @return TripCity
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }
}
