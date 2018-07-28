<?php

namespace TMFiles\Cache\Engines;

class EngineBase
{
    protected $functions = [];

    /**
     * Set a new function to the engine
     *
     * @param string $name
     * @param callable $method
     * @return void
     */
    public function setFunc(string $name, callable $method) {
        $this->functions[$name] = $method;
    }
}
