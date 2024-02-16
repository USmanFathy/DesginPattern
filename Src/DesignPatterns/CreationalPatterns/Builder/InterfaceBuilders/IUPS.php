<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\InterfaceBuilders;

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\UPS;

interface IUPS
{
    public function buildUPS():UPS;

}