<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', 'BotManController@index');
$router->post('/', 'BotManController@index');

require __DIR__ . '/botman.php';
