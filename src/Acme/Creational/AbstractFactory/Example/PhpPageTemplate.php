<?php

namespace Acme\Creational\AbstractFactory\Example;

class PhpPageTemplate extends AbstractPageTemplate
{

    public function getTemplateString(): string
    {
        $title = $this->templateTitle->getTemplateString();

        return 'course title: ' . $title;
    }
}