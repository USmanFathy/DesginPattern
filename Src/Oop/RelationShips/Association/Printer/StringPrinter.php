<?php

namespace DesignPattern\Oop\RelationShips\Association\Printer;

class StringPrinter extends Printer
{

    public function printToScreen() :string
    {
        return "Welcome to School {$this->stringPrinted}";
    }
}