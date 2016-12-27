<?php

namespace Main\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Main\CityBundle\Entity\CustomerCity;
use Main\PhotoBundle\Entity\Photo;

/**
 * Customer.
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_81398e09f85e0677", columns={"username"}), @ORM\UniqueConstraint(name="uniq_81398e09e7927c74", columns={"email"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=20, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=20, nullable=true)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @ORM\OneToMany(targetEntity="Main\CityBundle\Entity\CustomerCity", mappedBy="customer")
     */
    private $customerCities;

    /**
     * @ORM\OneToMany(targetEntity="Main\PhotBundle\Entity\Photo", mappedBy="customer")
     */
    private $customerPhotos;

    public function __construct()
    {
        $this->customerCities = new ArrayCollection();
        $this->customerPhotos = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="customer_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return Customer
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Customer
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastLogin.
     *
     * @param \DateTime $lastLogin
     *
     * @return Customer
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin.
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
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

    /**
     * Add customerCity.
     *
     * @param \Main\CityBundle\Entity\CustomerCity $customerCity
     *
     * @return Customer
     */
    public function addCustomerCity(CustomerCity $customerCity)
    {
        $this->customerCities->add($customerCity);

        return $this;
    }

    /**
     * Remove customerCity.
     *
     * @param \Main\CityBundle\Entity\CustomerCity $customerCity
     */
    public function removeCustomerCity(CustomerCity $customerCity)
    {
        $this->customerCities->removeElement($customerCity);
    }

    public function intiCustomerCities()
    {
        $this->customerCities = new ArrayCollection();

        return $this;
    }

    /**
     * Get customerCities.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomerCities()
    {
        return $this->customerCities->toArray();
    }

    /**
     * Add customerPhoto.
     *
     * @param \Main\PhotoBundle\Entity\Photo $customerPhoto
     *
     * @return Customer
     */
    public function addCustomerPhoto(Photo $customerPhoto)
    {
        $this->customerPhotos->add($customerPhoto);

        return $this;
    }

    /**
     * Remove customerPhoto.
     *
     * @param \Main\PhotoBundle\Entity\CustomerPhoto $customerPhoto
     */
    public function removeCustomerPhoto(Photo $customerPhoto)
    {
        $this->customerPhotos->removeElement($customerPhoto);
    }

    /**
     * Set customerCities.
     *
     * @param \ArrayCollection $customerCities
     *
     * @return Customer
     */
    public function setCustomerCities(ArrayCollection $customerCities)
    {
        foreach ($customerCities as $customerCity) {
            $this->customerCities->add($customerCity);
        }

        return $this;
    }

    /**
     * Get customerPhotos.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomerPhotos()
    {
        return $this->customerPhotos->toArray();
    }

    /**
     * Set customerPhotos.
     *
     * @param \ArrayCollection $customerPhotos
     *
     * @return Customer
     */
    public function setCustomerPhotos(ArrayCollection $customerPhotos)
    {
        foreach ($customerPhotos as $customerPhoto) {
            $this->customerPhotos->add($customerPhoto);
        }

        return $this;
    }
}
