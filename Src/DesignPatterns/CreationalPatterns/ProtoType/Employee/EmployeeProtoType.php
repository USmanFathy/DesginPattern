<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee;

use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Privileges;
use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types\NetworkProjectPrivileges;
use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types\WebProjectPrivileges;

class EmployeeProtoType implements ProtoType
{
    private ProfileData $profileData;
    private SalaryData $salaryData;
    private Privileges $privileges;

    /**
     * @param ProfileData $profileData
     * @param SalaryData $salaryData
     * @param Privileges $privileges
     */
    public function __construct(ProfileData $profileData, SalaryData $salaryData, Privileges $privileges)
    {
        $this->profileData = $profileData;
        $this->salaryData = $salaryData;
        $this->privileges = $privileges;
    }

    public function getProfileData(): ProfileData
    {
        return $this->profileData;
    }

    public function getSalaryData(): SalaryData
    {
        return $this->salaryData;
    }

    public function getPrivileges(): Privileges
    {
        return $this->privileges;
    }


    public function __clone()
    {
        $this->privileges->clearPrivileges();
        $this->privileges->addPrivileges(new WebProjectPrivileges());
        $this->privileges->addPrivileges(new NetworkProjectPrivileges());
        $this->salaryData->setTax(10);
        $this->salaryData->setSalary(1500);
        $this->salaryData->setMedicalInsurance(200);
        $this->profileData->setAddress(null);
        $this->profileData->setAge(20);
        $this->profileData->setMobileNumber(0);
        $this->profileData->setTelephoneNumber(0);
        $this->profileData->setSlackAccountName('slack.account');
        return $this;
    }
}