<?php
require_once __dir__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";


use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\MobileDialog;
use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\SystemDialog;
use DesignPattern\DesignPatterns\CreationalPatterns\FactoryMethod\DialogExample\Dialogs\WebDialog;

echo (new WebDialog())->renderButtonData();
echo (new MobileDialog())->renderButtonData();
echo (new SystemDialog())->renderButtonData();