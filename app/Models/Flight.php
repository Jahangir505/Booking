<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Flight extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $appends = ['departureTime', 'ArivalTime'];

    public function stopsales() {
        return $this->morphMany(StopSale::class, 'stopsaleable');
    }

    public function stops() {
        return $this->hasMany(Stop::class);
    }

    public function route() {
        return $this->belongsTo(Route::class);
    }

    public function airline() {
        return $this->belongsTo(Airline::class);
    }

    public function price() {
        return $this->belongsTo(FlightPrice::class, 'flightprice_id');
    }

    public function get_duration() {
        //be carefull about this method 
        //this method is heavily in use flight_list
        $start = new \DateTime($this->departure_date.' '.$this->departure_time);
        $end = new \DateTime($this->arival_date.' '.$this->arival_time);

        $diff = $start->diff($end);
        $hours = $diff->format('%d') * 24;
        $hours += $diff->format('%h');
        $minutes = $diff->format('%i');

        return $hours.'hr '.$minutes.'min';   
    }

    public function getDuration($start, $end) {
        //be carefull about this method 
        //this method is heavily in use flight_list
        $diff = $start->diff($end);
        $hours = $diff->format('%d') * 24;
        $hours += $diff->format('%H');
        $minutes = $diff->format('%i');

        return $hours.'hr '.$minutes.'min';  
    }

    public function hasStops() {
        return count($this->stops) > 0;
    }

    public function DepartureDateTime() {
        $date = new \DateTime($this->departure_date.' '.$this->departure_time);
        return $date;
    }

    public function ArivalDateTime() {
        $date = new \DateTime($this->arival_date.' '.$this->arival_time);
        return $date;
    }
   
}
