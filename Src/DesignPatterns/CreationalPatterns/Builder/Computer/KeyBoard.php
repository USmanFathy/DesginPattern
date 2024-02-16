<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer;

class KeyBoard
{
    private bool $uftSupport;

    /**
     * @param bool $uftSupport
     */
    public function __construct(bool $uftSupport)
    {
        $this->uftSupport = $uftSupport;
    }

    public function isUftSupport(): bool
    {
        return $this->uftSupport;
    }


}