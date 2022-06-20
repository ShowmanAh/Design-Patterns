<?php
namespace Acme\Creational\FactoryMethod;

class BmwCarBrand implements CarBrandInterface
{

    public function createBrand(): string
    {
        return "Bmw Brand";
    }

    public function color(): string
    {
        return 'red';
    }

    public function price(): int
    {
       return 48;
    }

    public function brand(): string
    {
        return 'Bmw';
    }
}