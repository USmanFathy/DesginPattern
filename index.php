<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";


//use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\MobileDialog;
//use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\SystemDialog;
//use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\WebDialog;
//
//echo (new WebDialog())->renderButtonData();
//echo (new MobileDialog())->renderButtonData();
//echo (new SystemDialog())->renderButtonData();

//use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Builders\ComputerCsBuilder;
//use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Builders\ComputerXLBuilder;
//use DesignPattern\DesignPatterns\CreationalPatterns\Builder\Director;
//
//$director =new Director(new ComputerCsBuilder()) ;
//$computer = $director->makeComputer();
//var_dump($computer);
//$director->changeBuilder(new ComputerXLBuilder());
//$newComputer =$director->makeComputer() ;
//var_dump($newComputer);


use  DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\EmployeeProtoType;
use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Privileges;
use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types\NetworkProjectPrivileges;
use DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types\ServerRoomProjectPrivileges;
use  DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\ProfileData;
use  DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\SalaryData;
use  DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Privileges\Types\WebProjectPrivileges;
use  DesignPattern\DesignPatterns\CreationalPatterns\ProtoType\Employee\Address;
$usman = new EmployeeProtoType(
    new ProfileData(
        'usman',
        25,
        new Address(
            521.455,
             521.88,
            'Dametta',
            'new Damitta',
            'cairo',
            2,
                2558
        ),
        '556666',
        '5522353',
        'usman@gmail.com'
    ),
    new SalaryData(2550,56,20.5),
    new Privileges([
        new WebProjectPrivileges(),
        new NetworkProjectPrivileges(),
    ])
);
$usman->getPrivileges()->addPrivileges(new ServerRoomProjectPrivileges());
var_dump($usman);
//copy object
$ahmed = clone $usman;
// change default data
$ahmed->getProfileData()->setName('ahmed');
var_dump($ahmed);
