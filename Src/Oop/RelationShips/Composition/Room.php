<?php

namespace DesignPattern\Oop\RelationShips\Composition;

class Room
{
    /**
     * @var int
     */
    private int $size;
    /**
     * @var string
     */
    private string $color;

    /**
     * @param int $size
     * @param string $color
     */
    public function __construct(int $size, string $color)
    {
        $this->size = $size;
        $this->color = $color;
    }

}