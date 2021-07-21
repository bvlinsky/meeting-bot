<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->group(['prefix' => 'botman'], function () use ($router) {
    require __DIR__ . '/botman.php';
});
