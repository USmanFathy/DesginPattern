<?php

namespace DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Computer\MotherBoard\MainParts\
{
    CPU,
    Disk,
    GPU,
    NetworkCard,
    RAM,
    Sockets
};


class MotherBoard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    /**
     * @param CPU $cpu
     * @param RAM $ram
     * @param GPU $gpu
     * @param Sockets $sockets
     * @param NetworkCard $networkCard
     * @param Disk $disk
     */
    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
    }

    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    public function getRam(): RAM
    {
        return $this->ram;
    }

    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    public function getDisk(): Disk
    {
        return $this->disk;
    }


}
