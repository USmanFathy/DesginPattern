<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types;

class NetworkProjectPrivileges implements PrivilegeTypeInterface
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