<?php

namespace Acme\Creational\AbstractFactory;

class BmwCar implements CarInterface
{
public function __construct(private $price)
{

}
    public function calculatePrice(): float
    {
        return $this->price + TaxEnums::$toyotaTax;
    }
}