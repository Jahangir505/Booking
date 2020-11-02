<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'properties' => 'array'
    ];


    public function get_properties(){
        return is_array($this->properties) ? $this->properties : (array) json_decode($this->properties, true);
    }

    public function property_length() {
        return count($this->get_properties());
    }
}
