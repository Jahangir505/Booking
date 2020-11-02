<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StopSale extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    
    public function stopsaleable() {
        return $this->morphTo();
    }
}
