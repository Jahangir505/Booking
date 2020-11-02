<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $appends = ['departure_date', 'arival_date'];

    public function flight() {
        return $this->belongsTo(Flight::class);
    }

    public function getDepartureDateAttribute() {
        $date = new \DateTime(\substr_replace($this->departure_time, "", -3));
        return $date->format('Y-m-d');
    }

    public function getArivalDateAttribute() {
        $date = new \DateTime(\substr_replace($this->arival_time, "", -3));
        return $date->format('Y-m-d');
    }

    public function DepartureTime() {
        $date = \DateTime::createFromFormat('Y-m-d H:i a', $this->departure_time);
        return $date->format('H:i a');
    }

    public function ArivalTime() {
        $date = \DateTime::createFromFormat('Y-m-d H:i a', $this->arival_time);
        return $date->format('H:i a');
    }

    public function DepartureDateTime() {
        $date = new \DateTime(\substr_replace($this->departure_time, "", -3));
        return $date;
    }

    public function ArivalDateTime() {
        $date = new \DateTime(\substr_replace($this->arival_time, "", -3));
        return $date;
    }
}
