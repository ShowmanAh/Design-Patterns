<?php
namespace Test;
use Acme\Creational\FactoryMethod\BmwCarBrand;
use Acme\Creational\FactoryMethod\BmwBrandFactory;
use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
public function testCanBuildBmwBrand()
{
    $brand = (new BmwBrandFactory())->buildBrand();
    $this->assertInstanceOf(BmwCarBrand::class, $brand);
    //$this->assertEquals(1,1);
}
}