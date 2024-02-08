<?php

namespace DesignPattern\Oop\RelationShips\Composition;

class House
{
    /**
     * @var array
     */
    private array $rooms;

    /**
     * @param array $rooms
     */
    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }


}