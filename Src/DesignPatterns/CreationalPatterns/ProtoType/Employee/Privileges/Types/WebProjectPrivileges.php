<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types;

class WebProjectPrivileges implements PrivilegeTypeInterface
{

    public function enable(): bool
    {
        return true;
    }

    public function disable(): bool
    {
        return true;
    }
}