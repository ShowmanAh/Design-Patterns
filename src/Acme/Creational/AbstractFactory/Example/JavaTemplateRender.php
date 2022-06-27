<?php

namespace Acme\Creational\AbstractFactory\Example;

class JavaTemplateRender implements TemplateRenderInterface
{

    public function render(string $templateString, $args = []): string
    {
        extract($args);

       return  $templateString;
    }
}