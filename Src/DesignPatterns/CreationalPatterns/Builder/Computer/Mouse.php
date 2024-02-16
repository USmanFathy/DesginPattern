<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer;

class Mouse
{
    private bool $withExtraUtilities;

    /**
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    public function isWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }



}