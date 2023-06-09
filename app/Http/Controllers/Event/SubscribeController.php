<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class SubscribeController extends Controller
{
    public function __invoke(Event $event)
    {
        $cafe = $event->cafe;
        $user_id = auth()->user()->id;
        $event->users()->attach($user_id);
        $events = $cafe->events()->paginate(3);
        return redirect()->route("cafe.show", $cafe);
    }
}
