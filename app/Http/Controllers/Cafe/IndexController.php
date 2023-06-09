<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class IndexController extends Controller
{
    public function __invoke()
    {


        $cafes = Cafe::paginate(3);


        return view("cafe.index", compact("cafes"));
    }
}
