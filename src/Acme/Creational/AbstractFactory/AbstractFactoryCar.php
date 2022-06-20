<?php

namespace Acme\Creational\AbstractFactory;

class AbstractFactoryCar
{
   public function __construct(private $price)
   {

   }
   public function createBmwCar(): BmwCar
   {
       return new BmwCar($this->price);
   }
   public function createToyotaCar(): ToyotaCar
   {
       return new ToyotaCar($this->price);
   }
}