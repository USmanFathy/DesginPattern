<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs;

use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\Button;
use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\WebButton;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
       return new WebButton();
    }

}