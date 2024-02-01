<?php

namespace DesignPattern\Oop;

abstract class Car
{
    /**
     * @var int
     */
    protected int $speed;
    /**
     * @var int
     */
    protected int $countOfDoors;
    /**
     * @var string
     */
    protected string $gearSystem;
    /**
     * @var string
     */
    protected string $color;
    /**
     * @var bool
     */
    protected bool $turnOn = false;

    /**
     * @param int $speed
     * @param int $countOfDoors
     * @param string $gearSystem
     * @param string $color
     */
    public function __construct(int $speed, int $countOfDoors, string $gearSystem, string $color)
    {
        $this->speed = $speed;
        $this->countOfDoors = $countOfDoors;
        $this->gearSystem = $gearSystem;
        $this->color = $color;
    }


    public abstract function move():int ;
    public abstract function turnOn():bool;
    public abstract function turnOff():bool;
    public abstract function accelerate(int $speed) :bool;
    public abstract function park():bool;

}