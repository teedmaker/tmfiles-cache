<?php

namespace TMFiles\Cache\Engines;

abstract class EngineModel
{

    public function __construct() {}

    public function manipulate() {}

    public function getContent(): string {}

}
