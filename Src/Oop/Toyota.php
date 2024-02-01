<?php

namespace DesignPattern\Oop;

class Toyota extends Car
{

    public function move(): int
    {
       return $this->speed *2 ;
    }

    public function turnOn(): bool
    {
        $this->turnOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->turnOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed + 0.5 ;
        return true ;
    }

    public function park(): bool
    {
        return true;
    }
}