<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\RelationShips\Composition\House;
use DesignPattern\Oop\RelationShips\Composition\Room;

$room1 = new Room(20,'white');
$room2 = new Room(30,'lightGray');
$room3 = new Room(25,'lightBlue');

$house = new House([$room3,$room1,$room2]);
