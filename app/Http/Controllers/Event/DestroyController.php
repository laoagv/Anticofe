<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class DestroyController extends Controller
{
//    private function delete($id){
//        $event = Event::find($id);
//
//    }
    public function __invoke(Event $event)
    {
        $cafe = $event->cafe;
        $event->delete();
        return redirect()->route("cafe.show", ['cafe'=>$cafe]);
    }
}
