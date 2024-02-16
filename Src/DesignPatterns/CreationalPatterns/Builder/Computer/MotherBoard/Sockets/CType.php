<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\Sockets;

class CType
{
    private bool $videoTransfer;

    /**
     * @param bool $videoTransfer
     */
    public function __construct(bool $videoTransfer)
    {
        $this->videoTransfer = $videoTransfer;
    }

    public function isVideoTransfer(): bool
    {
        return $this->videoTransfer;
    }


}