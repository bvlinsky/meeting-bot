<?php

$botman = app('botman');

$botman->hears('Hi', 'App\Http\Controllers\BotManController@hi');

$botman->fallback('App\Http\Controllers\BotManController@fallback');

$botman->listen();
