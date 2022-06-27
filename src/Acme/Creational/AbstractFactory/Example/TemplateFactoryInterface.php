<?php

namespace Acme\Creational\AbstractFactory\Example;

interface TemplateFactoryInterface
{
public function titleTemplate(): TitleTemplateInterface;
public function pageTemplate() : PageTemplateInterface;
public function getRender(): RenderTemplateInterface;

}