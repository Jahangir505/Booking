<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function rooms() {
        return $this->hasMany(Room::class);
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
