<?php

namespace TMPHP\Cache\Engines;

abstract class EngineModel extends EngineBase implements EngineModel
{
    abstract public function __construct(string $content);
}
