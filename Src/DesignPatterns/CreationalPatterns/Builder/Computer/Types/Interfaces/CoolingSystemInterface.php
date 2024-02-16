<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces;

interface CoolingSystemInterface
{
    public function coolDown(int $temp):bool;
}