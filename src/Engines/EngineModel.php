<?php

namespace TMPHP\Cache\Engine;

abstract class EngineModel extends EngineBase implements EngineModel
{
    abstract public function __construct(string $content);
}
