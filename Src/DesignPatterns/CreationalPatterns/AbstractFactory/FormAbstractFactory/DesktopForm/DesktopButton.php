<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractButton;

class DesktopButton extends AbstractButton
{

    public function onClick(): void
    {
        echo "hello from on click desktop button";
    }
    public function render():void
    {
        echo "render button from desktop";
    }
}