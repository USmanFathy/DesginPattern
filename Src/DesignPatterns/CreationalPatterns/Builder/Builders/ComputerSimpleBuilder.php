<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Builders;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Builder;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\CoolingSystem;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\KeyBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Monitor;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\CPU;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\Disk;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\GPU;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\RAM;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\Sockets;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MotherBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\Sockets\CType;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\Sockets\USB;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Mouse;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Computer;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\ComputerCs;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\Types\Interfaces\ComputerSimple;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\UPS;

class ComputerSimpleBuilder extends Builder
{

    protected function buildMotherBoard(): MotherBoard
    {
        $cpu = new CPU(5);
        $ram = new RAM(16);
        $gpu = new GPU(2);
        $sockets = new Sockets([
            new USB(3),
            new USB(2),
            new CType(true),
            new CType(true),
            new CType(true),
        ]);
        $networkCard = new NetworkCard(5);
        $disk = new Disk('SSd');
        return  new MotherBoard($cpu,$ram,$gpu,$sockets,$networkCard,$disk);
    }

    protected function buildKeyBoard(): KeyBoard
    {
        return new KeyBoard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(false);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1920FHD');
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerSimple();
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setKeyBoard($this->buildKeyBoard());
        $computer->setMouse($this->buildMouse());
        return $computer;
    }
}