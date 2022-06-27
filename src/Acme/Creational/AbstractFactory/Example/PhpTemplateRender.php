<?php

namespace Acme\Creational\AbstractFactory\Example;

class PhpTemplateRender implements TemplateRenderInterface
{

    public function render(string $templateString, $args = []): string
    {
      extract($args);
        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;

    }
}