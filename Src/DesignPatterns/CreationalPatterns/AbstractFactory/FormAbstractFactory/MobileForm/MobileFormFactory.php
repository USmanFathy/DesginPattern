<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractWindow;
class MobileFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new MobileTextInput('mobile input','enter your name','hi');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new MobileTextArea('mobile area','test');
    }

    public function createButton(): AbstractButton
    {
        return new MobileButton('Save');
    }

    public function createWindow(): AbstractWindow
    {
        return  new MobileWindow('320 x 720');
    }
}