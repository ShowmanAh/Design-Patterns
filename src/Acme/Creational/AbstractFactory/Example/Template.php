<?php

namespace Acme\Creational\AbstractFactory\Example;

class Template
{
    protected string $title,
        $content;
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function render(TemplateFactoryInterface $factory): string
    {
        $pageTemplate = $factory->pageTemplate();
        $rendered = $factory->getRender();

        return $rendered->render($pageTemplate->getTemplateString(),
            $this->title,
            $this->content
        ) ;

    }

}