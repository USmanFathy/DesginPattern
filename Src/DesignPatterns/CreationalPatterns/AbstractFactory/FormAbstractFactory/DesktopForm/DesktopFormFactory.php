<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractWindow;
class DesktopFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new DesktopTextInput('desktop input','enter your name','hi');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new DesktopTextArea('desktop area','test');
    }

    public function createButton(): AbstractButton
    {
        return new DesktopButton('Click Me');
    }

    public function createWindow(): AbstractWindow
    {
        return  new DesktopWindow('1280 x 780');
    }
}