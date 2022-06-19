<?php
namespace Acme\Creational\FactoryMethod;

class ToyotaCarBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return 'Toyota Brand';
    }
}