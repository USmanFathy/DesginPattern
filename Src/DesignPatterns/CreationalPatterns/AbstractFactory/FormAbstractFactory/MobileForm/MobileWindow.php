<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractWindow;

class MobileWindow extends AbstractWindow
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