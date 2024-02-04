<?php

namespace DesignPattern\Oop;

class HttpClient extends Client
{
    public function welcomeAfterConnect()
    {
        return $this->connect()."<br> test <br>".$this->source;
    }
}