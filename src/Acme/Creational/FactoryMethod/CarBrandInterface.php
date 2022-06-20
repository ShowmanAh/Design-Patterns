<?php
namespace Acme\Creational\FactoryMethod;

interface CarBrandInterface
{
public function createBrand(): string;
public function color(): string;
public function price(): int;
public function brand(): string;

}