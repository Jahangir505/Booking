<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function getParseFacility() {
        return is_array($this->facilities) ? $this->facilities : json_decode($this->facilities);
    }
}
