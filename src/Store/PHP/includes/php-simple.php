<?php

$app = new TMPHP\Cache\Store\PHP\Engine;

/**
 * Prints a hello world
 * g: global
 */
$app->setFunc('/\@helloWorld/g', function() {
  return 'echo "Hello World!";';
});

/**
 * Print a hello name
 * g: global
 * U: find more than one
 */
$app->setFunc("/\@sayMyName\(((\"|\')(.*)(\"|\')|(.*))\)/gU", function(array $matches) {
  $name = $matches[5] ?? $matches[3];
  return 'echo "Hello $name!";';
});

/**
 * Provides a foreach function
 * U: find more than one
 * g: global
 * s: includes new line on dot
 */
$app->setFunc("/\@foreach\((.*)\)(.*)\@endforeach/Ugs", function(array $matches) {
  return 'foreach ({$matches[1]}) {
    {$matches[2]}
  }';
});

return $app;
