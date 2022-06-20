<?php

namespace Acme\Creational\AbstractFactory;

class ToyotaCar implements CarInterface
{
    public function __construct(private $price)
    {

    }

    public function calculatePrice(): float
    {
       return $this->price + TaxEnums::$toyotaTax;
    }
}