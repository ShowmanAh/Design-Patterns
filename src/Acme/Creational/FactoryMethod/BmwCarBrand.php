<?php
namespace Acme\Creational\FactoryMethod;

class BmwCarBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return "Bmw Brand";
    }
}