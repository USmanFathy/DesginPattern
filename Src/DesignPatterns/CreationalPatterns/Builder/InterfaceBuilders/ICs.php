<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\InterfaceBuilders;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\CoolingSystem;

interface ICs
{
     public function buildCoolingSystem():CoolingSystem;

}