<?php

namespace Acme\Creational\FactoryMethod;

class BmwBrandFactory implements BrandFactory
{

    public function buildBrand()
    {
        return new BmwCarBrand();
    }
}