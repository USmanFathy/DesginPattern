<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class DesktopTextInput extends AbstractTextInput
{

    public function onChange(): void
    {
       echo "hello from on change desktop text input";
    }
    public function render():void
    {
        echo "render text input from desktop";
    }
}