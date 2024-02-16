<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts;

class Sockets
{
    private array $sockets;

    /**
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    public function getSockets(): array
    {
        return $this->sockets;
    }


}