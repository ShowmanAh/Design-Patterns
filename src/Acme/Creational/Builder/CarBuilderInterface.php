<?php

namespace Acme\Creational\Builder;

interface CarBuilderInterface
{
    public function createCar(): void;
    public function addBody(): void;
    public function addDoors(): void;
    public function addEngine(): void;
    public function getCar(): Object;
}