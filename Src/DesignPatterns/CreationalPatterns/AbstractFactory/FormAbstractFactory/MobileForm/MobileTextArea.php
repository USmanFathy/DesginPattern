<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class MobileTextArea extends AbstractTextArea
{

    public function onResize(): void
    {
        echo "hello from on change Size mobile text Area";
    }
    public function render():void
    {
        echo "render text area from mobile";
    }
}