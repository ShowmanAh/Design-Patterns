<?php

namespace Tests;
require "../vendor/autoload.php";
use Acme\Creational\Builder\BmwCarBuilder;
use Acme\Creational\Builder\CarProducer;
use Acme\Creational\Builder\Models\BmwCar;
use Acme\Creational\Builder\Models\ToyotaCar;
use Acme\Creational\Builder\ToyotaCarBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public  function testCanProduceBmwModel()
    {
        $bmwBuilder = new BmwCarBuilder();
        $bmwProducer = new CarProducer($bmwBuilder);
        $bmwCar = $bmwProducer->produceCar();

        $this->assertInstanceOf(BmwCar::class, $bmwCar);
    }

    public  function testCanProduceToyotaModel()
    {
        $toyotaBuilder = new ToyotaCarBuilder();
        $toyotaProducer = new CarProducer($toyotaBuilder);
        $toyotaCar = $toyotaProducer->produceCar();

        $this->assertInstanceOf(ToyotaCar::class, $toyotaCar);
    }
}