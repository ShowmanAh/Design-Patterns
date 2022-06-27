<?php

namespace Tests;
require "../vendor/autoload.php";

use Acme\Creational\AbstractFactory\Example\JavaTemplateFactory;
use Acme\Creational\AbstractFactory\Example\PhpTemplateFactory;
use Acme\Creational\AbstractFactory\Example\PhpTemplateRender;
use Acme\Creational\AbstractFactory\Example\Template;
use PHPUnit\Framework\TestCase;
class ExampleAbstractFactoryTest extends TestCase
{
    public function testCanInstanceOfTemplate()
    {
        $template = new Template('title', 'content');
        $this->assertInstanceOf(Template::class, $template);
    }

    public function testCanRenderPhpTemplate(){
        $template = new Template('title', 'content');
        $rendered = $template->render(new PhpTemplateFactory());
        $this->assertIsString($rendered);
    }

    public function testCanRenderJavaTemplate(){
        $template = new Template('title', 'content');
        $rendered = $template->render(new JavaTemplateFactory());
        $this->assertIsString($rendered);
    }

    public function testCanGetPhpTitle()
    {
        $template = (new PhpTemplateFactory())->titleTemplate();
        $this->assertIsString($template->getTemplateString());

    }

}