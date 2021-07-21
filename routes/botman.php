<?php

$botman = app('botman');

$botman->hears('Hi', fn ($bot) => $bot->reply('Hello!'));

$botman->fallback(fn ($bot) => $bot->reply('Sorry, I did not understand.'));
