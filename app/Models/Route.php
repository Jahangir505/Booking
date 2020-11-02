<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function getRouteName() {
        return $this->from_city.' to '.$this->to_city;
    }
}
