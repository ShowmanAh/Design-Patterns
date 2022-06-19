<?php

namespace Acme\Creational\FactoryMethod;

class ToyotaBrandFactory implements BrandFactory
{

    public function buildBrand()
    {
        return new ToyotaCarBrand();
    }
}