<?php

namespace DesignPattern\Oop;

class OrganizationSalary extends Salary
{
    /**
     * @var float
     */
    private float $organizationTax;

    /**
     * @param float $salary
     * @param float $tax
     * @param int $overTime
     * @param float $absentRate
     * @param float $overTimeRate
     * @param float $organizationTax
     */
    public function __construct(
        float $salary,
        float $tax,
        int $overTime,
        float $absentRate,
        float $overTimeRate,
        float $organizationTax
    )
    {
        parent::__construct(
            $salary,
            $tax,
            $overTime,
            $absentRate,
            $overTimeRate);
        $this->organizationTax = $organizationTax;
    }

    public function calculateSalary():float
    {
        return $this->salary - ($this->salary * $this->tax)-($this->salary * $this->organizationTax);
    }


}