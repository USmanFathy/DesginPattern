<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class WebTextArea extends AbstractTextArea
{

    public function onResize(): void
    {
        echo "hello from on change Size web text Area";

    }

    public function render():void
    {
        echo "render text area from web";
    }
}