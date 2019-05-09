<?php

namespace TMPHP\Cache\Store\PHP;

use TMPHP\Cache\Engines\{
    EngineBase,
    EngineModel
};

class Engine extends EngineBase
{
    protected $content  = null;
    protected $includes = [
        'includes/php-simples.php'
    ];

}
