<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class ShowController extends Controller
{
    public function __invoke(Event $event)
    {
        return view("event.show", compact("event"));
    }
}
