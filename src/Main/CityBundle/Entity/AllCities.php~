<?php

namespace Main\CityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AllCities.
 *
 * @ORM\Table(name="all_cities")
 * @ORM\Entity(repositoryClass="Main\CityBundle\Repository\AllCitiesRepository")
 */
class AllCities
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
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=33)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="cityAscii", type="string", length=39)
     */
    private $cityAscii;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=32, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="iso2", type="string", length=3, nullable=true)
     */
    private $iso2;

    /**
     * @var string
     *
     * @ORM\Column(name="iso3", type="string", length=3, nullable=true)
     */
    private $iso3;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=43, nullable=true)
     */
    private $province;

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
     * Set city.
     *
     * @param string $city
     *
     * @return AllCities
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set cityAscii.
     *
     * @param string $cityAscii
     *
     * @return AllCities
     */
    public function setCityAscii($cityAscii)
    {
        $this->cityAscii = $cityAscii;

        return $this;
    }

    /**
     * Get cityAscii.
     *
     * @return string
     */
    public function getCityAscii()
    {
        return $this->cityAscii;
    }

    /**
     * Set country.
     *
     * @param string $country
     *
     * @return AllCities
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set iso2.
     *
     * @param string $iso2
     *
     * @return AllCities
     */
    public function setIso2($iso2)
    {
        $this->iso2 = $iso2;

        return $this;
    }

    /**
     * Get iso2.
     *
     * @return string
     */
    public function getIso2()
    {
        return $this->iso2;
    }

    /**
     * Set iso3.
     *
     * @param string $iso3
     *
     * @return AllCities
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * Get iso3.
     *
     * @return string
     */
    public function getIso3()
    {
        return $this->iso3;
    }

    /**
     * Set province.
     *
     * @param string $province
     *
     * @return AllCities
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province.
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }
}
