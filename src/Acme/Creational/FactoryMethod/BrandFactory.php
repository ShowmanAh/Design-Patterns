<?php

namespace Acme\Creational\FactoryMethod;

abstract class BrandFactory
{
public abstract function buildBrand(): CarBrandInterface;
public function generateCar(): string
{
    $brand = $this->buildBrand();
    return $brand->color() . "<bre>" . $brand->price() . "<bre>" . $brand->brand() .  "<bre>";
}
}