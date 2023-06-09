<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            "title" =>"string",
            "description"=>"string",
            "date"=>"date",
            "cafe_id"=>"integer"
        ]);
        $cafe = $data['cafe_id'];
//        $cafe = Cafe::find($data['cafe_id']);
//        unset($data['cafe_id']);

        $event = Event::create($data);
//        $event->cafe()->attach($cafe);
        return redirect()->route ('cafe.show', ["cafe"=>$cafe]);
    }
}
