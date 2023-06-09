<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class UnSubscribeController extends Controller
{
    public function __invoke(Event $event)
    {
        $cafes = Cafe::all();
        $user_id = auth()->user()->id;
        $event->users()->detach($user_id);
        return redirect()->route('cafe.index');
    }
}
