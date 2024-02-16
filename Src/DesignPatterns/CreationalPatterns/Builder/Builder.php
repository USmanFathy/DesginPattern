<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\KeyBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Monitor;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MotherBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Mouse;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Computer;

abstract class Builder
{
    protected Computer $computer;

    abstract protected function buildMotherBoard():MotherBoard;
    abstract protected function buildKeyBoard():KeyBoard;
    abstract protected function buildMouse():Mouse;
    abstract protected function buildMonitor():Monitor;
    abstract public function getComputer():Computer;

}