<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $guarded = [];
    public  $timestamps = false;

    public function __toString() {
        return "VehicleType ($this->car_type) Capacity: pax ($this->maximum_pax), luggage ($this->maximum_luggage)";
    }

}
