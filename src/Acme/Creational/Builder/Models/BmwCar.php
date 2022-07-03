<?php

namespace Acme\Creational\Builder\Models;

class BmwCar extends Car
{
   public function setData($name, $value): void
   {
       parent::setData($name, $value);
   }
}