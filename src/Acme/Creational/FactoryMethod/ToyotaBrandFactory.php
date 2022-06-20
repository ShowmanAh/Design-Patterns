<?php

namespace Acme\Creational\FactoryMethod;

class ToyotaBrandFactory extends BrandFactory
{

    public function buildBrand(): CarBrandInterface
    {
        return new ToyotaCarBrand();
    }
}