<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cafe extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "cafes";
    protected $guarded = [];
    public function events(){
        return $this->hasMany(Event::class, "cafe_id", "id");
    }
    public function users(){

    }
}
