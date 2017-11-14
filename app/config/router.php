<?php

$router = $di->getRouter();

// Define your routes here
$router->notFound([
    'controller'         => 'Errors',
    'action'             => 'notFound'
]);

$router->addGet('/', [
    'controller'         => 'Pages',
    'action'             => 'index'
]);

$router->add('/signin', [
    'controller'         => 'SignIn',
    'action'             => 'index'
]);

$router->handle();