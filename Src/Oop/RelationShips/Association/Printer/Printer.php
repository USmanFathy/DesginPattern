<?php

namespace DesignPattern\Oop\RelationShips\Association\Printer;

abstract class Printer
{

    protected string $stringPrinted;

    public function setStringPrinted(string $stringPrinted): void
    {
        $this->stringPrinted = $stringPrinted;
    }

    abstract public function printToScreen():string;

}