<?php

namespace DesignPattern\Oop;

class Client
{
    /**
     * @var string
     */
    protected string $source;
    /**
     * @var int
     */
    protected int $timeOut;

    /**
     * @param string $source
     * @param int $timeOut
     */
    public function __construct(string $source, int $timeOut)
    {
        $this->source = $source;
        $this->timeOut = $timeOut;
    }


    public function connect():string
    {
        return "Iam connecting to ".$this->source;
    }

    public function call(string $url):string
    {
        return "Iam fetched this data for you to {$url}";
    }

    public function terminate():bool
    {
        return true;
    }
}