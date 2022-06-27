<?php

namespace Acme\Creational\AbstractFactory\Example;

class JavaPageTemplate extends AbstractPageTemplate
{

    public function getTemplateString(): string
    {
       $title = $this->templateTitle->getTemplateString();

       return 'java course : ' . $title;

    }
}