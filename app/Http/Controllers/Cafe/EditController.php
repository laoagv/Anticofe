<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class EditController extends Controller
{
    public function __invoke(Cafe $cafe)
    {

        return view("cafe.edit", compact("cafe"));
    }
}
