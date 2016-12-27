<?php

namespace Main\PhotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album.
 *
 * @ORM\Table(name="album")
 * @ORM\Entity(repositoryClass="Main\PhotoBundle\Repository\AlbumRepository")
 */
class Album
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
     * @ORM\ManyToOne(targetEntity="Main\BackendBundle\Entity\Customer", inversedBy="customerAlbums")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    /**
     * @var string
     *
     * @ORM\Column(name="albumTitle", type="string", length=50, nullable=true)
     */
    private $albumTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

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
     * Set albumTitle.
     *
     * @param string $albumTitle
     *
     * @return Album
     */
    public function setAlbumTitle($albumTitle)
    {
        $this->albumTitle = $albumTitle;

        return $this;
    }

    /**
     * Get albumTitle.
     *
     * @return string
     */
    public function getAlbumTitle()
    {
        return $this->albumTitle;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return Album
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated.
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}
