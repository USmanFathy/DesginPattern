<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\CoolingSystem;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces\CoolingSystemInterface;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces\IPower;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\UPS;

class ComputerXl extends Computer implements CoolingSystemInterface ,IPower
{
    private CoolingSystem $coolingSystem;
    private UPS $ups;


     public function turnOn(): bool
     {
         // do actions
         return true ;
     }

     public function turnOff(): bool
     {
         // do actions
         return true ;
     }

    public function coolDown(int $temp): bool
    {
        //do actions
        return true ;
    }

    public function backupPower(): bool
    {
        // do some things before backup.
        return true;
    }

    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

    public function setUps(UPS $ups): void
    {
        $this->ups = $ups;
    }

    public function getCoolingSystem(): CoolingSystem
    {
        return $this->coolingSystem;
    }

    public function getUps(): UPS
    {
        return $this->ups;
    }

}

