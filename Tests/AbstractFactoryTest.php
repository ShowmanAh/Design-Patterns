<?php

namespace Test;
require "../vendor/autoload.php";
use Acme\Creational\AbstractFactory\AbstractFactoryCar;
use Acme\Creational\AbstractFactory\BmwCar;
use Acme\Creational\AbstractFactory\ToyotaCar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
public function testCanCreateBmwCar()
{
    $bmwCar = (new AbstractFactoryCar(200.0))->createBmwCar();
    $this->assertInstanceOf(BmwCar::class, $bmwCar);
}
public function testCanCreateToyotaCar()
{
    $toyotaCar = (new AbstractFactoryCar(100.0))->createToyotaCar();
    $this->assertInstanceOf(ToyotaCar::class, $toyotaCar);
}
public function testCanCalculatePrice(){
    $bmwCar = (new AbstractFactoryCar(200.0))->createBmwCar();
    $this->assertTrue(true);
    $this->assertIsFloat($bmwCar->calculatePrice());
}
}