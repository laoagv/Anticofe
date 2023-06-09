<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class ShowController extends Controller
{
    public function __invoke(Cafe $cafe)
    {
        $events = $cafe->events()->paginate(3);
        return view("cafe.show", compact("cafe", 'events'));
    }
}
