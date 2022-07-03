<?php

namespace Acme\Creational\Builder\Models;

class ToyotaCar extends Car
{
  public function setData($name, $value): void
  {
      parent::setData($name, $value);
  }
}