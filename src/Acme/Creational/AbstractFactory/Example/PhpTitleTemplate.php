<?php

namespace Acme\Creational\AbstractFactory\Example;

class PhpTitleTemplate implements TitleTemplateInterface
{

    public function getTemplateString(): string
    {
        return 'php course';
    }
}