<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            "name"=>"string",
            "address"=>"string"]);
//        $events = $data['events'];
//        unset($data['events']);

        $cafe = Cafe::create($data);
//        $cafe->events()->attach($events);
        return redirect()->route ('cafe.index');
    }
}
