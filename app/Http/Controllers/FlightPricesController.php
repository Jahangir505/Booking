<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightPrice;
use App\Models\Route;

class FlightPricesController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $flightPrices = FlightPrice::all();
        return view('admin.flight.price.list', compact('flightPrices'));
    }

    public function create() {
        $routes = Route::all();
        return view('admin.flight.price.create', compact('routes'));
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'take_of_time' => 'required|string',
            'take_of_date' => 'required|date:Y-m-d',
            'price_per_adult' => 'required',
            'price_per_child' => 'required',
            'price_per_infant' => 'required',
            'available_seat' => 'required|numeric',
            'route_id' => 'required|numeric'
        ]);

        $flightPrice = FlightPrice::create($validated);

        return redirect(route('flightprices'))->with('success', 'FlightPrice Created SuccessFully');

    }

    public function edit(Request $request, FlightPrice $flightPrice) {
        $routes = Route::all();
        return view('admin.flight.price.edit', compact('routes', 'flightPrice'));
    }

    public function update(Request $request, FlightPrice $flightPrice) {

        $validated = $request->validate([
            'take_of_time' => 'required|string',
            'take_of_date' => 'required|date:Y-m-d',
            'price_per_adult' => 'required',
            'price_per_child' => 'required',
            'price_per_infant' => 'required',
            'available_seat' => 'required|numeric',
            'route_id' => 'required|numeric'
        ]);

        $flightPrice->update($validated);

        return redirect(route('flightprices'))->with('success', 'FlightPrice Updated SuccessFully');;
    }

    public function delete(Request $request, FlightPrice $flightPrice) {
        $flightPrice->delete();
        return redirect(route('flightprices'))->with('success', 'FlightPrice Deleted SuccessFully');;
    }

}
