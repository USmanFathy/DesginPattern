<?php

namespace DesignPattern\Oop;

class Salary
{
    /**
     * @var float
     */
    protected float $salary;
    /**
     * @var float
     */
    protected float $tax;
    /**
     * @var int
     */
    protected int $overTime;
    /**
     * @var float
     */
    protected float $absentRate;
    /**
     * @var float
     */
    protected float $overTimeRate;

    /**
     * @param float $salary
     * @param float $tax
     * @param int $overTime
     * @param float $absentRate
     * @param float $overTimeRate
     */
    public function __construct(float $salary, float $tax, int $overTime, float $absentRate, float $overTimeRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->overTime = $overTime;
        $this->absentRate = $absentRate;
        $this->overTimeRate = $overTimeRate;
    }

    public function calculateSalary():float
    {
        return $this->salary - ($this->salary * $this->tax);
    }

    public function calculateSalaryExtraTax(float $extraTAx):float
    {
        return $this->calculateSalary() - ($extraTAx);
    }
}