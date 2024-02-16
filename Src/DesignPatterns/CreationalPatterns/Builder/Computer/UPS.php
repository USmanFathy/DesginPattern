<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer;

class UPS
{
    private int $duration;

    /**
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }

    public function getLowTempLimit(): int
    {
        return $this->duration;
    }



}