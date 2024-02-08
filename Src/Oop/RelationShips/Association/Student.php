<?php

namespace DesignPattern\Oop\RelationShips\Association;

class Student
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $homeWork;
    /**
     * @var int
     */
    private int $homeWorkRate =50;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function assignATempTeacher(Teacher $teacher)
    {
        $this->homeWork=$teacher->assignHomeWork();
    }

    public function getHomeWorkRate(): int
    {
        return $this->homeWorkRate;
    }

    public function doHomeWork()
    {
        $this->homeWorkRate= rand(20,100);
    }

    public function getHomeWork(): string
    {
        return $this->homeWork;
    }



}