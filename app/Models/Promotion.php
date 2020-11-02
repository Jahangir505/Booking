<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
