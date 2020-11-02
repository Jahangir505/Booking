<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlightStoreRequest;
use Illuminate\Support\Str;

use App\Models\Flight;
use App\Models\Airline;
use App\Models\Route;
use App\Models\FlightPrice;

use App\Traits\UploadTrait;



class FlightsController extends Controller
{
    use UploadTrait;

    public function __construct() 
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $flights = Flight::all();
        return view('admin.flight.list', \compact('flights'));
    }

    public function create()
    {
        $airlines = Airline::all();
        $routes = Route::all();
        $flightPrices = FlightPrice::all();

        return view('admin.flight.create', compact('airlines', 'routes', 'flightPrices'));
    }

    public function store(FlightStoreRequest $request)
    {
        $flight = Flight::create($request->validated());

        if($request->input('transit') == 'yes') {
            foreach($request->input('stopover') as $stopover) {
                $flight->stops()->create($stopover);
            }
        }
        
        return redirect(route('flights'))->with('success', "Flight Created Successfully");
    }


    public function edit(Request $request, Flight $flight)
    {
        $airlines = Airline::all();
        $routes = Route::all();
        $flightPrices = FlightPrice::all();

        return view('admin.flight.edit', compact('flight', 'airlines', 'routes', 'flightPrices'));
    }

    public function update(FlightStoreRequest $request, Flight $flight)
    {
        $flight->update($request->validated());
        
        if($request->input('transit') == 'yes') {
            foreach($request->input('stopover') as $key => $value) {
                $flight->stops[$key]->update($value);
            }
        }

        return redirect(route('flights'))->with('success', "Flight Update Successfully");
    }

    public function delete(Flight $flight)
    {
        $flight->delete();
        return redirect(route('flights'))->with('success', "Flight Delete Successfully");
    }


    public function getPricesForARoute(Request $request) {
        if ($request->has('route_id')) {
            $flightPrices = FlightPrice::where('route_id', $request->input('route_id'));
            return $flightPrices->get();
        }
    }
}
