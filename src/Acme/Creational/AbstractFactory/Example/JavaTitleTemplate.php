<?php

namespace Acme\Creational\AbstractFactory\Example;

class JavaTitleTemplate implements TitleTemplateInterface
{

    public function getTemplateString(): string
    {
        return 'java course';
    }
}