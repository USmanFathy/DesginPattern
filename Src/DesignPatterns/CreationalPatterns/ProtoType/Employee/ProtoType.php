<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee;

interface ProtoType
{
    // magic method specify what is done to copy
    public function __clone();
}