<?php

namespace DesignPattern\Oop\RelationShips\Association;

use DesignPattern\Oop\RelationShips\Association\Printer\Printer;

class Teacher
{
    private  string $name ;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function welcome(Printer $printer):string
    {
        $printer->setStringPrinted($this->name);
        return $printer->printToScreen();
    }

    public function assignHomeWork():string
    {
       return "Do 50 push ups";
    }

    public function evaluateHomeWork(Student $student)
    {
        if ($student->getHomeWorkRate() >= 50){
            return "success";
        }

        return "failed";
    }
}
