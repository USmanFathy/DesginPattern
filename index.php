<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\RelationShips\Association\Student;
use DesignPattern\Oop\RelationShips\Association\Teacher;
//use DesignPattern\Oop\RelationShips\Association\Printer\StringPrinter;

$teacher = new Teacher("usman ahmed");

//echo $teacher->welcome(new StringPrinter());
$student = new Student("amira");


$student->assignATempTeacher($teacher);
$student->doHomeWork();
$teacher->evaluateHomeWork($student);
var_dump($student->getHomeWorkRate(),$teacher->evaluateHomeWork($student),$student->getHomeWork());