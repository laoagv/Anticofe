<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class IndexController extends Controller
{
    public function __invoke()
    {
        $events = Event::all();
        return view("event.index", compact("events"));
    }
}
