<?php

namespace Acme\Creational\FactoryMethod;

class BmwBrandFactory extends BrandFactory
{

    public function buildBrand(): CarBrandInterface
    {
        return new BmwCarBrand();
    }
}