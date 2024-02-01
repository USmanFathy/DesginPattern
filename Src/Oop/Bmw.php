<?php

namespace DesignPattern\Oop;

class Bmw extends Car
{

    public function move(): int
    {
       return $this->speed ;
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
        $this->speed = $speed;
        return true ;
    }

    public function park(): bool
    {
        return true;
    }
}