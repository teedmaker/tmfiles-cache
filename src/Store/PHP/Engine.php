<?php

namespace TMPHP\Cache\Store\PHP;

class Engine extends EngineBase implements EngineModel
{
    protected $content  = null;
    protected $includes = [
        'includes/php-simples.php'
    ];

}
