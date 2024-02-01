<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\Bmw;
use DesignPattern\Oop\Toyota;
use DesignPattern\Oop\Order;

$bmw = new Bmw(200,4,"Front","red");
$toyota = new Toyota(350,4,"Back","white");
$order1 = new Order('Cairo' , "Alex" , 500);
$order2 = new Order('Cairo' , "Aswan" , 200);

var_dump($order1->deliverOrder($bmw));
var_dump($order2->deliverOrder($toyota));