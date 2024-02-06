<?php

namespace DesignPattern\Oop;

class Employee
{
    /**
     * @var string
     */
    private string $name ;
    /**
     * @var int
     */
    private int $age ;
    /**
     * @var string
     */
    private string $address;
    /**
     * @var Salary
     */
    private Salary $salary;

    /**
     * @param string $name
     * @param int $age
     * @param string $address
     * @param Salary $salary
     */
    public function __construct(string $name, int $age, string $address, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }



}