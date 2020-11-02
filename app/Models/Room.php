<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $casts = [
        'price' => 'int'
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function images() {
        return $this->morphMany(Gallery::class, 'galleriable');
    }

    public function get_image() {
        return $this->images->first() ? $this->images->first()->image : null;
    }

    public function getFacilities() {
        return $this->facilities ? json_decode($this->facilities) : null;
    }

    public function stopsales() {
        return $this->morphMany(StopSale::class, 'stopsaleable');
    }
    
}
