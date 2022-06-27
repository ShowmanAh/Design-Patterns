<?php

namespace Acme\Creational\AbstractFactory\Example;

class JavaTemplateFactory implements TemplateFactoryInterface
{

    public function titleTemplate(): TitleTemplateInterface
    {
        return new JavaTitleTemplate();
    }

    public function pageTemplate(): PageTemplateInterface
    {
       return new JavaPageTemplate($this->pageTemplate());
    }

    public function getRender(): RenderTemplateInterface
    {
        return new JavaTemplateRender();
    }
}