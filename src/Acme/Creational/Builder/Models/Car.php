<?php

namespace Acme\Creational\Builder\Models;

class Car
{
    private array $data = [];
    public function setData($name, $value): void
    {
       $this->data[$name] = $value;
    }
}