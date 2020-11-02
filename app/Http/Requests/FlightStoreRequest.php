<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'route_id' => 'required|numeric',
            'duration' => 'numeric',
            'airline_id' => 'required|numeric',
            'class' => 'required|string',
            'transit' => 'required|string',
            'flightprice_id' => 'required|numeric',
            'departure_city' => 'required',
            'arival_city' => 'required',
            'departure_time' => 'required',
            'departure_date' => 'required',
            'arival_date' => 'required',
            'arival_time' => 'required'
        ];
    }
}
