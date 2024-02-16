<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types;

class ServerRoomProjectPrivileges implements PrivilegeTypeInterface
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