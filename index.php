<?php
require "vendor/autoload.php";
use Acme\Creational\FactoryMethod\BmwCarBrand;
use Acme\Creational\FactoryMethod\ToyotaBrandFactory;

error_reporting(E_ALL);
ini_set('display_errors', '1');
$bmw = new ToyotaBrandFactory();
echo 'sdf';
//echo $bmw->createBrand();