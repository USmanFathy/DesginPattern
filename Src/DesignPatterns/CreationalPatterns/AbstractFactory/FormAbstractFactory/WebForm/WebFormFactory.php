<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory\AbstractWindow;

class WebFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new WebTextInput('input','enter your name','hi');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new WebTextArea('area','test');
    }

    public function createButton(): AbstractButton
    {
        return new WebButton('home');
    }

    public function createWindow(): AbstractWindow
    {
        return new WebWindow('150');
    }
}