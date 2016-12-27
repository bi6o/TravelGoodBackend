<?php

namespace Main\PhotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\BackendBundle\Entity\Customer;

/**
 * Photo.
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="Main\PhotoBundle\Repository\PhotoRepository")
 */
class Photo
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
     * @ORM\ManyToOne(targetEntity="Main\BackendBundle\Entity\Customer", inversedBy="customerPhotos")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;
    /**
     * @var string
     *
     * @ORM\Column(name="photo_title", type="string", length=34, nullable=true)
     */
    private $photoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_url", type="string", length=50)
     */
    private $photoUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_uploaded", type="datetime")
     */
    private $dateUploaded;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_type", type="string", length=50)
     */
    private $photoType;

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
     * Set photoTitle.
     *
     * @param string $photoTitle
     *
     * @return Photo
     */
    public function setPhotoTitle($photoTitle)
    {
        $this->photoTitle = $photoTitle;

        return $this;
    }

    /**
     * Get photoTitle.
     *
     * @return string
     */
    public function getPhotoTitle()
    {
        return $this->photoTitle;
    }

    /**
     * Set photoUrl.
     *
     * @param string $photoUrl
     *
     * @return Photo
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get photoUrl.
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * Set dateUploaded.
     *
     * @param \DateTime $dateUploaded
     *
     * @return Photo
     */
    public function setDateUploaded($dateUploaded)
    {
        $this->dateUploaded = $dateUploaded;

        return $this;
    }

    /**
     * Get dateUploaded.
     *
     * @return \DateTime
     */
    public function getDateUploaded()
    {
        return $this->dateUploaded;
    }

    /**
     * Set photoType.
     *
     * @param string $photoType
     *
     * @return Photo
     */
    public function setPhotoType($photoType)
    {
        $this->photoType = $photoType;

        return $this;
    }

    /**
     * Get photoType.
     *
     * @return string
     */
    public function getPhotoType()
    {
        return $this->photoType;
    }

    /**
     * Set customer.
     *
     * @param \Main\BackendBundle\Entity\Customer $customer
     *
     * @return Photo
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
