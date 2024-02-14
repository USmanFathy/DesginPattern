<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons;

class WebButton extends Button
{
    public function show(): string
    {
       return "<button>Click ME</button>";
    }

    public function click(): void
    {
        // a punch of commands to executed
    }

}