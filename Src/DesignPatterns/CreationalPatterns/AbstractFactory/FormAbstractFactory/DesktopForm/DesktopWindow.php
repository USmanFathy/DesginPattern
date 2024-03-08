<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractWindow;

class DesktopWindow extends AbstractWindow
{

    public function onClose(): void
    {
        echo "thank you to use our service";

    }

    public function onResize(): void
    {
        echo "resize ";
    }
}