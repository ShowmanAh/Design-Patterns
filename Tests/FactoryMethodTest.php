<?php
namespace Test;

require "../vendor/autoload.php";
use Acme\Creational\FactoryMethod\BmwCarBrand;
use Acme\Creational\FactoryMethod\BmwBrandFactory;
use Acme\Creational\FactoryMethod\ToyotaBrandFactory;
use Acme\Creational\FactoryMethod\ToyotaCarBrand;
use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
public function testCanBuildBmwBrand()
{
    $brand = (new BmwBrandFactory())->buildBrand();
    $this->assertInstanceOf(BmwCarBrand::class, $brand);
}
public function testCanBuildToyotaBrand()
{
    $brand = (new ToyotaBrandFactory())->buildBrand();
    $this->assertInstanceOf(ToyotaCarBrand::class, $brand);
    //$this->assertNotEmpty($brand->brand());
}
public function testCanGenerateBmwCar()
{
    $bmwFactory = (new BmwBrandFactory())->generateCar();
    $this->assertTrue(true);
    $this->assertIsString($bmwFactory);
}
public function testCanGenerateToyotaCar()
{
    $toyotaFactory = (new ToyotaBrandFactory())->generateCar();
    $this->assertIsString($toyotaFactory);
}
}