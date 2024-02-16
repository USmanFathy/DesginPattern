<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee;

class Address
{
    private float $longitude;
    private float $latitude;
    private string $streetName;
    private string $city;
    private string $country;
    private int $buildingNumber;
    private int $zipCode;

    /**
     * @param float $longitude
     * @param float $latitude
     * @param string $streetName
     * @param string $city
     * @param string $country
     * @param int $buildingNumber
     * @param int $zipCode
     */
    public function __construct(float $longitude, float $latitude, string $streetName, string $city, string $country, int $buildingNumber, int $zipCode)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->buildingNumber = $buildingNumber;
        $this->zipCode = $zipCode;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getBuildingNumber(): int
    {
        return $this->buildingNumber;
    }

    public function getZipCode(): int
    {
        return $this->zipCode;
    }



}