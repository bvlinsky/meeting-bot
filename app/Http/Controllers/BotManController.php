<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class BotManController extends Controller
{
    public function index()
    {
        $botman = app('botman');

        $botman->listen();
    }
}
