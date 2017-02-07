<?php

namespace Main\TripBundle\Entity;

use Main\MapBundle\Entity\Point;
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
     */
    private $segment;

	/**
	 * @var \Main\MapBundle\Entity\Point
	 */
	private $point;

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
     * Set point
     *
     * @param \Main\MapBundle\Entity\Point $point
     *
     * @return TripCity
     */
    public function setPoint(Point $point = null)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return \Main\MapBundle\Entity\Point
     */
    public function getPoint()
    {
        return $this->point;
    }
    /**
     * @var \Main\TripBundle\Entity\Trip
     */
    private $trip;


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
}
