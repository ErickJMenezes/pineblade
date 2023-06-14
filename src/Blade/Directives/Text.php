<?php

namespace Pineblade\Pineblade\Blade\Directives;

use Illuminate\Support\Facades\Blade;

class Text extends AbstractCustomDirective
{
    public function register(): void
    {
        Blade::directive('text', function (string $expression) {
            $compiled = $this->compiler
                ->compileXText("<?php {$expression};");
            return "<span x-text=\"{$compiled}\"></span>";
        });
    }
}