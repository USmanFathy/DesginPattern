<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

use DesignPattern\Oop\HttpClient;

$http = new HttpClient('https://www.hi.com',15);

echo $http->connect()."<br>" ;
echo $http->call('/test') ."<br>";
echo $http->terminate() ."<br>";
echo $http->welcomeAfterConnect();