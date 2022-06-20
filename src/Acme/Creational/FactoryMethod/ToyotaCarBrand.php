<?php
namespace Acme\Creational\FactoryMethod;

class ToyotaCarBrand implements CarBrandInterface
{

    public function createBrand(): string
    {
        return 'Toyota Brand';
    }

    public function color(): string
    {
       return 'black';
    }

    public function price(): int
    {
        return 33;
    }

    public function brand(): string
    {
        return 'toyota';
    }
}