<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons;

class UIButton extends Button
{
    public function show(): string
    {
       return '<UIButton props="{UI Button}"></UIButton>';
    }

    public function click(): void
    {
        // a punch of commands to executed
    }

}