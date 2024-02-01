<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\Bmw;
use DesignPattern\Oop\Toyota;
use DesignPattern\Oop\CarDashboard;

$bmw = new Bmw(200,4,"Front","red");
$toyota = new Toyota(350,4,"Back","white");

$toyota->installDashboard(new CarDashboard(4,50,700));

echo $toyota->carInfo();