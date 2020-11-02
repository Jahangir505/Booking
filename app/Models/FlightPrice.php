<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightPrice extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $appends = ['flightPriceLabel'];

    protected $casts = [
        'price_per_infant' => 'int',
        'price_per_adult' => 'int',
        'price_per_child' => 'int',
    ];

    public function route() {
        return $this->belongsTo(Route::class);
    }

    public function getFlightPriceLabelAttribute() {
        return "$$this->price_per_adult per adult price, $this->take_of_date at $this->take_of_time";
    }
}
