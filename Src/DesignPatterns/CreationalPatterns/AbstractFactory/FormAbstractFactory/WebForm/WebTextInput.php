<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class WebTextInput extends AbstractTextInput
{

    public function onChange(): void
    {
       echo "hello from on change web text input";
    }

    public function render():void
    {
        echo "render text input from web";
    }
}