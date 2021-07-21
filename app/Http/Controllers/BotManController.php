<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Laravel\Lumen\Routing\Controller;

class BotManController extends Controller
{
    public function hi(BotMan $bot): void
    {
        $bot->reply('Hello!');
    }

    public function fallback(BotMan $bot): void
    {
        $bot->reply('Sorry, I did not understand.');
    }
}
