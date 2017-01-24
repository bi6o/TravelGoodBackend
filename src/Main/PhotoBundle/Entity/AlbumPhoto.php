<?php

namespace Main\PhotoBundle\Entity;

/**
 * AlbumPhoto.
 */
class AlbumPhoto
{
    /**
     * @var int
     */
    private $id;

    private $album;

    private $photo;

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
     * Set photo.
     *
     * @param \Main\PhotoBundle\Entity\Photo $photo
     *
     * @return AlbumPhoto
     */
    public function setPhoto(Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return \Main\PhotoBundle\Entity\Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set album.
     *
     * @param \Main\PhotoBundle\Entity\Album $album
     *
     * @return AlbumPhoto
     */
    public function setAlbum(Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album.
     *
     * @return \Main\PhotoBundle\Entity\Album
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
