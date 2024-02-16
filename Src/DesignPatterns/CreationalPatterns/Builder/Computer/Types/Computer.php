<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\KeyBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Monitor;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MotherBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Mouse;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected Mouse $mouse;
    protected Monitor $monitor;
    protected KeyBoard $keyBoard;

    abstract public function turnOn():bool;
    abstract public function turnOff():bool;


    public function setMotherBoard(MotherBoard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;
    }

    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

    public function setKeyBoard(KeyBoard $keyBoard): void
    {
        $this->keyBoard = $keyBoard;
    }
    public function dashBoard():string{
        return '';
    }

}