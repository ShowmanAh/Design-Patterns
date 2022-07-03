<?php

namespace Acme\Creational\Builder;

use Acme\Creational\Builder\Models\BmwCar;

class BmwCarBuilder implements CarBuilderInterface
{
    private Object $type ;
    public function createCar(): void
    {
        $this->type = new BmwCar();
    }

    public function addBody(): void
    {
       $this->type->setData('Body', 'body');
    }

    public function addDoors(): void
    {
        $this->type->setData('Doors', 'doors');
    }

    public function addEngine(): void
    {
        $this->type->setData('Engine', 'engine');
    }

    public function getCar(): Object
    {
        return $this->type;
    }
}