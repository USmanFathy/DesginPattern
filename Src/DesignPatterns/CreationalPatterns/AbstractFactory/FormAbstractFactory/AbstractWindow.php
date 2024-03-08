<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\AbstractFactory\FormAbstractFactory;

abstract class AbstractWindow
{
    protected array $components;
    protected string $size;

    /**
     * @param string $size
     */
    public function __construct(string $size)
    {
        $this->size = $size;
    }

    /**
     * @param Renderable $component
     * @return void
     */

    public function addComponent(Renderable $component)
    {
        $this->components[] = $component;
    }

    public function render()
    {
     return "welcome to our gui form ".implode(',',array_map(fn(Renderable $elm)=>$elm->render(),$this->components));
    }
    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    abstract public function onClose():void;
    abstract public function onResize():void;


}