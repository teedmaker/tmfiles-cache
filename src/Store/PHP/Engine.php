<?php

namespace TMPHP\Cache\Store\PHP;

use TMPHP\Cache\Engines\{
    EngineBase,
    EngineModel
};

class Engine extends EngineBase implements EngineModel
{
    protected $content  = null;
    protected $includes = [
        'includes/php-simples.php'
    ];

}
