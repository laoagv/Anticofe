<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class CreateController extends Controller
{
    public function __invoke($cafe_id)
    {
        $cafe = Cafe::findOrFail($cafe_id);
        return view("event.create", compact("cafe"));
    }
}
