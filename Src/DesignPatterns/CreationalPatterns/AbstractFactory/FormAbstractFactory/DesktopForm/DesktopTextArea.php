<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class DesktopTextArea extends AbstractTextArea
{

    public function onResize(): void
    {
        echo "hello from on change Size desktop text Area";
    }
    public function render():void
    {
        echo "render text area from desktop";
    }
}