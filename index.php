<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\RelationShips\Aggregation\Project;
use DesignPattern\Oop\RelationShips\Aggregation\Developer;

$usman = new Developer("usman ahmed");
$usman1 = new Developer("usman ahmed");
$usman2 = new Developer("usman ahmed");


$project = new Project(
    'x Project',
    new DateTime('now'),
    [$usman,$usman1,$usman2]);

$project->setDeadline(new DateInterval('P1M'));

var_dump($project->showInfo());