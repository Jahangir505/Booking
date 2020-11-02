<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Rate;
use App\Models\Hotel;

class RatesController extends Controller
{
    
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $rates = Rate::all();

        return view('admin.hotels.rate_list', compact('rates'));
    }

    public function create() {
        $rooms = Room::all();
        $hotels = Hotel::all();
        return view('admin.hotels.create_rate', \compact('rooms', 'hotels'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'room_id' => 'required|integer',
            'price' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'nationality' => '',
        ]);

        $rate = Rate::create($validated);

        $rate->is_available = $request->has('is_available');

        $rate->save();

        return redirect('admin/rates')->with('success', 'Rate Created SuccessFully');
    }

    public function edit(Request $request, Rate $rate) {
        $rooms = Room::all();
        $hotels = Hotel::all();
        return view('admin.hotels.edit_rate', compact('rate', 'rooms', 'hotels'));
    }

    public function update(Request $request, Rate $rate) {

        $validated = $request->validate([
            'room_id' => 'required_without:hotel_id|integer',
            'hotel_id' => 'required_without:room_id|integer',
            'price' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'nationality' => '',

        ]);


        $rate->update($validated);
        
        $rate->is_available = $request->has('is_available');
        $rate->save();

        return redirect('admin/rates')->with('success', 'Rate Updated SuccessFully');
    }

    public function delete(Request $request, Rate $rate) {
        $rate->delete();
        return redirect('admin/rates')->with('success', 'Rate Deleted SuccessFully');
    }
}
