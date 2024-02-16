<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";


//use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\MobileDialog;
//use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\SystemDialog;
//use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\WebDialog;
//
//echo (new WebDialog())->renderButtonData();
//echo (new MobileDialog())->renderButtonData();
//echo (new SystemDialog())->renderButtonData();

use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Builders\ComputerCsBuilder;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Builders\ComputerXLBuilder;
use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Director;

$director =new Director(new ComputerCsBuilder()) ;
$computer = $director->makeComputer();
var_dump($computer);
$director->changeBuilder(new ComputerXLBuilder());
$newComputer =$director->makeComputer() ;
var_dump($newComputer);
