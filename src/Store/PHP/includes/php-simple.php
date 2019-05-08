<?php

$app = new TMPHP\Cache\Store\PHP\Engine;

/**
 * Prints a hello world
 */
$app->setFunc('/\@helloWorld/', function() {
    return 'echo "Hello World!";';
});

/**
 * print a hello name
 */
$app->setFunc("/\@sayMyName\(((\"|\')(.*)(\"|\')|(.*))\)/g", function(array $matches) {
    $name = $matches[5] ?? $matches[3];
    return 'echo "Hello {$name}!";';
});

/**
 * Provides a foreach function
 * U: find more than one
 * g: global
 * s: includes new line on dot
 */
$app->setFunc("/\@foreach\((.*)\)(.*)\@endforeach/Ugs", function(array $matches) {
    return 'foreach ({$matches[1]}) {
        $matches[2]
    }';
});
