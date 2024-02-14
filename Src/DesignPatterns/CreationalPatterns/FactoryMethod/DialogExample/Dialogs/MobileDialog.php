<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs;

use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\Button;
use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Buttons\UIButton;

class MobileDialog extends Dialog
{
    public function createButton(): Button
    {
       return new UIButton();
    }

}