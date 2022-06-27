<?php

namespace Acme\Creational\AbstractFactory\Example;

interface TemplateRenderInterface
{
public function render(string $templateString, $args = []): string;

}