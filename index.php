<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\Employee;
use DesignPattern\Oop\OrganizationSalary as Salary;

$salary   = new Salary(6500,0.2,30,75,30,0.15);
$employee = new Employee('usman',25,'dameitta',$salary);

echo $employee->getSalary()->calculateSalary();
