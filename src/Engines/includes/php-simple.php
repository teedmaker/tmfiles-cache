<?php

$app = new TMFiles\Cache\Engines\PHPSimple;

/**
 * Prints a hello world
 */
$app->setFunc('/\@helloWorld/', function() {
    return 'echo "Hello World!";';
});

/**
 * print a hello name
 */
$app->setFunc('/\@sayMyName\(([a-zA-Z])\)/', function() {
    return 'echo "Hello $1!";';
});

/**
 * Provides a foreach function
 */
$app->setFunc('/(\@foreach\((.*)\)\n(.*)\n\@enforeach)/', function() {
    return 'foreach ($1) {
        $2
    }';
});
