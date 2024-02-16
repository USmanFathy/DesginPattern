<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\CoolingSystem;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Computer;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces\CoolingSystemInterface;

class ComputerSimple extends Computer
{
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


}

