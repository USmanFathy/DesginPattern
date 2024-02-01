<?php

namespace DesignPattern\Oop;

class Order
{
    /**
     * @var string
     */
    private string $source;
    /**
     * @var string
     */
    private string $destination;
    /**
     * @var string
     */
    private string $weight;

    /**
     * @param string $source
     * @param string $destination
     * @param string $weight
     */
    public function __construct(string $source, string $destination, string $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    public function deliverOrder(Car $car) :string
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();
        return "I am moving from {$this->source} to {$this->destination} to deliver a package of {$this->weight} K.G with speed {$car->move()}";
    }
}