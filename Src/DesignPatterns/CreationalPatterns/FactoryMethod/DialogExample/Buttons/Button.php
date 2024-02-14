<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons;

abstract class Button
{
    abstract public function show():string;
    abstract public function click():void;
}