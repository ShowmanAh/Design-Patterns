<?php

namespace Acme\Creational\Builder;


use Acme\Creational\Builder\Models\ToyotaCar;
use phpDocumentor\Reflection\Types\Object_;

class ToyotaCarBuilder implements CarBuilderInterface
{
    private Object $type ;
    public function createCar(): void
    {
        $this->type = new ToyotaCar();
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

    public function getCar(): object
    {
        return $this->type;
    }
}