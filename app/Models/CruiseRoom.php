<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CruiseRoom extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function images() {
        return $this->morphMany(Gallery::class, 'galleriable');
    }

    public function get_image() {
        return $this->images->first() ? $this->images->first()->image : null;
    }

    public function cruise() {
        return $this->belongsTo(Cruise::class);
    }

    public function getParseFacility() {
        return is_array($this->facilities) ? $this->facilities : json_decode($this->facilities);
    }
}
