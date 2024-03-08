<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractButton;

class WebButton extends AbstractButton
{

    public function onClick(): void
    {
        echo "hello from on click web button";
    }
    public function render():void
    {
        echo "render button from web";
    }
}