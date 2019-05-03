<?php

namespace TMPHP\Cache\Store;

class PHPEngine extends EngineBase implements EngineModel
{
    protected $content  = null;
    protected $includes = [
        'includes/php-simples.php'
    ];

    public function __construct(string $content) {
        $this->content = $content;
        $this->content = str_replace('test', 'Test', $this->content);
    }

}
