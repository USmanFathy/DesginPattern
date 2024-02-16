<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges;

use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types\PrivilegeTypeInterface;

class Privileges
{
    private array $privileges;

    /**
     * @param array $privileges
     */
    public function __construct(array $privileges)
    {
        $this->privileges = $privileges;
    }

    public function addPrivileges(PrivilegeTypeInterface $privilegeType)
    {
        array_push($this->privileges,$privilegeType);
    }
    public function clearPrivileges()
    {
        $this->privileges =[];
    }

}