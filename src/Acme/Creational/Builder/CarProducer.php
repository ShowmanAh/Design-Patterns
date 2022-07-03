<?php

namespace Acme\Creational\Builder;

use Acme\Creational\Builder\Models\Car;

class CarProducer
{
    public function __construct(public CarBuilderInterface $carBuilder)
    {

    }
    public function produceCar(): Car
    {
        $this->carBuilder->createCar();
        $this->carBuilder->addBody();
        $this->carBuilder->addDoors();
        $this->carBuilder->addEngine();

        return
            $this->carBuilder->getCar();
    }
}