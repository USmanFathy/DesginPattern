<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory;

class GUIClient
{
    private AbstractFormFactory $factory;

    /**
     * @param AbstractFormFactory $factory
     */
    public function __construct(AbstractFormFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createForm()
    {
        $window =$this->factory->createWindow();
        $window->addComponent($this->factory->createButton());
        $window->addComponent($this->factory->createTextArea());
        $window->addComponent($this->factory->createTextInput());
        return $window->render();
    }


}