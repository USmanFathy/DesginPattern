<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs;

use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\Button;
use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\SystemButton;

class SystemDialog extends Dialog
{
    public function createButton(): Button
    {
       return new SystemButton();
    }

}