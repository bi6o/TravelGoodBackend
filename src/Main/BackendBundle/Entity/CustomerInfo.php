<?php

namespace Main\BackendBundle\Entity;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @param \Main\PhotoBundle\Entity\Photo $profilePicture
     *
     * @return CustomerInfo
     */
    public function setProfilePicture(\Main\PhotoBundle\Entity\Photo $profilePicture = null)
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture.
     *
     * @return \Main\PhotoBundle\Entity\Photo
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }
}
