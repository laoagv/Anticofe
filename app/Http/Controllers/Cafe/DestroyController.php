<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Models\Cafe;
use App\Models\Event;

class DestroyController extends Controller
{
    private function delete($id){
        $cafe = Event::find($id);
        $cafe->delete();
    }
    public function __invoke(Cafe $cafe)
    {
        $cafe->delete($cafe->id);
        return redirect()->route("cafe.index");
    }
}
