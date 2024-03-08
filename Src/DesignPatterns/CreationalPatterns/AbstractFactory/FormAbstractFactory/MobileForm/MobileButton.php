<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractButton;

class MobileButton extends AbstractButton
{

    public function onClick(): void
    {
        echo "hello from on click mobile button";
    }
    public function render():void
    {
        echo "render button from mobile";
    }
}