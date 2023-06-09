<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Integration\Database\Post;
use App\Models\Event;

class UpdateController extends Controller
{
    public function __invoke(Event $event)
    {
        $data = request()->validate([
            "title"=>"string",
            "description"=>"string",
            "date"=>"date"
        ]);
        $event->update($data);
        $cafe = $event->cafe;
        return redirect()->route('cafe.show', ["cafe"=>$cafe->id]);
    }
}
