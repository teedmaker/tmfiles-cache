<?php

namespace TMPHP\Cache\Engine;

class Engine
{
  protected $regexes = [];

  /**
   * Set a new function to the engine
   *
   * @param string $regex
   * @param callable $replacement
   * @return void
   */
  public function register(string $regex, string $replacement) {
    $this->regexes[$regex] = $replacement;
  }

  public function getRegexes() {
    return $this->regexes;
  }
}
