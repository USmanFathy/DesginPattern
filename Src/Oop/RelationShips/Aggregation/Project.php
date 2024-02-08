<?php

namespace DesignPattern\Oop\RelationShips\Aggregation;

class Project
{
    /**
     * @var string
     */
    private  string $name;
    /**
     * @var \DateTime
     */
    private \DateTime $deadline;
    /**
     * @var array
     */

    private array $developers;

    /**
     * @param string $name
     * @param \DateTime $deadline
     * @param array $developers
     */
    public function __construct(string $name, \DateTime $deadline, array $developers)
    {
        $this->name = $name;
        $this->deadline = $deadline;
        $this->developers = $developers;
    }

    public function setDeadline(\DateInterval $interval): void
    {
        $this->deadline->add($interval);
    }

    public function showInfo():string
    {
        $list =array_map(function (Developer $dev){
        return $dev->getName();
        },$this->developers);
        $listDevs = implode(',',$list);
        return "
        Project Name : {$this->name} <br>
        Project dead line : {$this->deadline->format('y-m-d')} <br>
        Developers : {$listDevs} <br> 
        ";

    }



}