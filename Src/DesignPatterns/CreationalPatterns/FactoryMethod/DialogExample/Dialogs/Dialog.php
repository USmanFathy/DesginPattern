<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs;

use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    //method which factory method design pattern for
    abstract public function createButton():Button;

    public function renderButtonData():string
    {
        $button = $this->createButton();

        return "
        ##########################<br>
        Button: {$button->show()}<br>
        ##########################<br>
        ";
    }
}