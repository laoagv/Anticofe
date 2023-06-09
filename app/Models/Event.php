<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    use HasFactory;
    protected $table = "events";
    protected $guarded = [];
    public function cafe(){
        return $this->belongsTo(Cafe::class, "cafe_id", "id");
    }
    public function users(){
        return $this->belongsToMany(User::class, 'user_events',"event_id", "user_id");
    }
}
