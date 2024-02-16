<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\CoolingSystem;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces\CoolingSystemInterface;

class ComputerCs extends Computer implements CoolingSystemInterface
{
     private CoolingSystem $coolingSystem;
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
        return true ;
    }

    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

    public function getCoolingSystem(): CoolingSystem
    {
        return $this->coolingSystem;
    }

}

