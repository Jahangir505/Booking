<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\models\Room;
use App\Models\Flight;
use App\Models\StopSale;

class StopSalesController extends Controller
{
    public function __construct() {
        return $this->middleware('admin');
    }


    public function index() {
        $stopsales = StopSale::all();
        return view('admin.stopsale.list', compact('stopsales'));
    }

    public function create() {
        return view('admin.stopsale.create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'stop_sale_for' => 'required',
            'stopsaleable' => 'required|numeric'
        ]);

        switch ($request->input('stop_sale_for')) {

            case 'flight':
                $flight = Flight::where('id',$request->input('stopsaleable'))->first();
                $flight->stopsales()->create([
                    'name' => $request->input('name'),
                    'from_date' => $request->input('from_date'),
                    'to_date' => $request->input('to_date'),
                    'nationality' => $request->input('nationality')
                ]);
                break;

            case 'hotel':
                $hotel = Hotel::where('id',$request->input('stopsaleable'))->first();
                $hotel->stopsales()->create([
                    'name' => $request->input('name'),
                    'from_date' => $request->input('from_date'),
                    'to_date' => $request->input('to_date'),
                    'nationality' => $request->input('nationality')
                ]);
                break;
        
            case 'room':
                $room = Room::where('id',$request->input('stopsaleable'))->first();
                $room->stopsales()->create([
                    'name' => $request->input('name'),
                    'from_date' => $request->input('from_date'),
                    'to_date' => $request->input('to_date'),
                    'nationality' => $request->input('nationality')
                ]);
                break;
        }

        return redirect(route('stopsale'))->with('success', 'StopSale Created SuccessFully');

    }

    public function edit(Request $request, StopSale $stopsale) {
        return view('admin.stopsale.edit', compact('stopsale'));
    }

    public function update(Request $request, StopSale $stopsale) {
        $request->validate([
            'name' => 'required',
            'from_date' => 'required',
            'to_date' => 'required'
        ]);

        $stopsale->update($request->all());

        return redirect(route('stopsale'))->with('success', 'StopSale Update SuccessFully');
    }


    public function delete(Request $request, StopSale $stopsale) {
        $stopsale->delete();
        return redirect(route('stopsale'))->with('success', 'StopSale Deleted SuccessFully');
    }
    
    public function get_realated_data() {
        //this method will return all data for related types
        //for exmple if user select flights type in 
        //stopsale page then this method will return all flights for dropdown menu
        if(request()->has('type')) {

            $type = request()->input('type');
            switch ($type) {
                case 'flight':
                    return Flight::all();
                
                case 'hotel':
                    return Hotel::all();
                
                case 'room':
                    return Room::with('hotel')->get();
            }
        }
    }
}
