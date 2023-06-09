<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view("cafe.create");
    }
}
