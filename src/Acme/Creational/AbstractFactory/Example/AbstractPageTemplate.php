<?php

namespace Acme\Creational\AbstractFactory\Example;

abstract class AbstractPageTemplate implements PageTemplateInterface
{
    protected $templateTitle;
public function __construct(TitleTemplateInterface $titleTemplate)
{
    $this->templateTitle = $titleTemplate;
}
}