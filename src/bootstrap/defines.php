<?php

if (!defined('TMFILES_DIR')) {
    $path = __DIR__ . "/../../../../../.tmfiles-cache/";
    define('TMFILES_DIR', $path);
}

if (!is_dir(TMFILES_DIR)) {
    try {
        mkdir(TMFILES_DIR);
    } catch(Exception $e) {
        ob_start();
        echo $e->getMessage();
        exit;
    }
}
