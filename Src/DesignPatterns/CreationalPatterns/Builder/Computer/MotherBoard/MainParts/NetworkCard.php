<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts;

class NetworkCard
{
    private int $category;

    /**
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    public function getCategory(): int
    {
        return $this->category;
    }


}