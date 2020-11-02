<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
