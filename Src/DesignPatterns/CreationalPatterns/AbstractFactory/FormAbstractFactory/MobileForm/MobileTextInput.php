<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class MobileTextInput extends AbstractTextInput
{

    public function onChange(): void
    {
       echo "hello from on change mobile text input";
    }
    public function render():void
    {
        echo "render text input from mobile";
    }
}