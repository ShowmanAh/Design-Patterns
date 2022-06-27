<?php

namespace Acme\Creational\AbstractFactory\Example;

class PhpTemplateFactory implements TemplateFactoryInterface
{

    public function titleTemplate(): TitleTemplateInterface
    {
       return new PhpTitleTemplate();
    }

    public function pageTemplate(): PageTemplateInterface
    {
        return new PhpPageTemplate($this->pageTemplate());
    }

    public function getRender(): RenderTemplateInterface
    {
        return new PhpTemplateRender();
    }
}