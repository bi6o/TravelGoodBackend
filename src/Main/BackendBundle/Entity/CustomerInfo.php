<?php

namespace Main\BackendBundle\Entity;

use Main\PhotoBundle\Entity\Photo;

/**
 * CustomerInfo.
 */
class CustomerInfo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $interests;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Main\PhotoBundle\Photo")
     * @ORM\JoinColumn(name="profile_picture_id", referencedColumnName="id")
     */
    private $profilePicture;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Main\BackendBundle\Entity\Customer", inversedBy="info")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

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
     * Set interests.
     *
     * @param string $interests
     *
     * @return CustomerInfo
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Get interests.
     *
     * @return string
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Set profilePicture.
     *
     * @param string $profilePicture
     *
     * @return CustomerInfo
     */
    public function setProfilePicture($photo)
    {
        $this->profilePicture = $photo;

        return $this;
    }

    /**
     * Get profilePicture.
     *
     * @return Photo
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }
}
