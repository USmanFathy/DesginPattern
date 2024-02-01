<?php

namespace DesignPattern\Oop;

class CarDashboard
{
    /**
     * @var int
     */
    protected int $oilLevel ;
    /**
     * @var int
     */
    protected int $fuelLevel;
    /**
     * @var int
     */
    protected int $airPressure;

    /**
     * @param int $oilLevel
     * @param int $fuelLevel
     * @param int $airPressure
     */
    public function __construct(int $oilLevel, int $fuelLevel, int $airPressure)
    {
        $this->oilLevel = $oilLevel;
        $this->fuelLevel = $fuelLevel;
        $this->airPressure = $airPressure;
    }


    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    public function setOilLevel(int $oilLevel): void
    {
        $this->oilLevel = $oilLevel;
    }

    private function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function setFuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;
    }

    private function getAirPressure(): int
    {
        return $this->airPressure;
    }

    public function setAirPressure(int $airPressure): void
    {
        $this->airPressure = $airPressure;
    }

    public function readDashboard():string
    {
        return "Showing analysis : \n 
        Fuel:{$this->getFuelLevel()} \n
         Oil:{$this->getOilLevel()}\n
         Air Pressure:{$this->getAirPressure()}";
    }

}