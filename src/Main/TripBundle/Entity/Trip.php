<?php

namespace Main\TripBundle\Entity;

/**
 * Trip
 */
class Trip
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $comment;


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
     * Set type
     *
     * @param string $type
     *
     * @return Trip
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Trip
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Trip
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tripCities;

    /**
     * @var \Main\BackendBundle\Entity\Customer
     */
    private $customer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tripCities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tripCity
     *
     * @param \Main\TripBundle\Entity\TripCity $tripCity
     *
     * @return Trip
     */
    public function addTripCity(\Main\TripBundle\Entity\TripCity $tripCity)
    {
        $this->tripCities[] = $tripCity;

        return $this;
    }

    /**
     * Remove tripCity
     *
     * @param \Main\TripBundle\Entity\TripCity $tripCity
     */
    public function removeTripCity(\Main\TripBundle\Entity\TripCity $tripCity)
    {
        $this->tripCities->removeElement($tripCity);
    }

    /**
     * Get tripCities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTripCities()
    {
        return $this->tripCities;
    }

    /**
     * Set customer
     *
     * @param \Main\BackendBundle\Entity\Customer $customer
     *
     * @return Trip
     */
    public function setCustomer(\Main\BackendBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Main\BackendBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
