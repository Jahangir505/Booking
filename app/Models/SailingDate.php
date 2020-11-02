<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SailingDate extends Model
{
    public $timestamps = false;
    protected  $guarded = [];

    public function cruise() {
        return $this->belongsTo(Cruise::class, 'cruise_id');
    }
}
