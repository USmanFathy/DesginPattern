<?php

namespace DesignPattern\Oop\RelationShips\Association\Printer;

class HtmlPrinter extends Printer
{

    public function printToScreen() :string
    {
        return "<h1> Welcome to School {$this->stringPrinted}</h1>";
    }
}