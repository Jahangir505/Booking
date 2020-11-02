<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransferPricing extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    

    public function transfer() {
        return $this->belongsTo(Transfer::class);
    }
}
