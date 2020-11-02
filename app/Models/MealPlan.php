<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function cruise() {
        return $this->belongsTo(Cruise::class);
    }
}
