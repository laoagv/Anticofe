<?php

namespace App\Http\Controllers\Cafe;

use App\Http\Controllers\Controller;
use App\Integration\Database\Post;
use App\Models\Cafe;
use App\Models\Event;

class UpdateController extends Controller
{
    public function __invoke(Cafe $cafe)
    {
        $data = request()->validate([
            "name"=>"string",
            "address"=>"string"
        ]);
        $cafe->update($data);
        return redirect()->route('cafe.index');
    }
}
