<?php

$loader = new \Phalcon\Loader();

/**
 * Register namespaces
 */
$loader->registerNamespaces([
    'BAPAgent\Forms'         => $config->application->formsDir
]);

/**
 * Register Dirs
 */
$loader->registerDirs([
    $config->application->controllersDir,
    $config->application->modelsDir
]);

$loader->register();
