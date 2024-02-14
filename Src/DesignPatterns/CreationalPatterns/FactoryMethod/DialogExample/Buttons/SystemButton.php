<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons;

class SystemButton extends Button
{
    public function show(): string
    {
       return "#Click Me#";
    }

    public function click(): void
    {
        // a punch of commands to executed
    }

}