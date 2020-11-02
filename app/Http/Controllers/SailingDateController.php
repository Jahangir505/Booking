<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SailingDate;
use App\Models\Cruise;

class SailingDateController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $sailings = SailingDate::all();
        return view('admin.cruise.sailing.list', compact('sailings'));
    }

    public function create() {
        $cruises = Cruise::all();
        return view('admin.cruise.sailing.create', compact('cruises'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'departure_date' => 'required|date_format:Y-m-d',
            'arival_date' => 'required|date_format:Y-m-d',
            'number_of_nights' => 'required|numeric',
            'destination' => 'required|string',
            'departure_port' => 'required|string',
            'arival_port' => 'required|string',
            'cruise_id' => 'required|numeric',
        ]);

        $sailing = SailingDate::create($validated);
        
        return redirect(route('sailings'))->with('success', 'SailingDate Created SuccessFully');
    }

    public function edit(SailingDate $sailing) {
        $cruises = Cruise::all();
        return view('admin.cruise.sailing.edit', compact('cruises', 'sailing'));
    }

    public function update(Request $request, SailingDate $sailing) {
        
        $validated = $request->validate([
            'departure_date' => 'required|date_format:Y-m-d',
            'arival_date' => 'required|date_format:Y-m-d',
            'number_of_nights' => 'required|numeric',
            'destination' => 'required|string',
            'departure_port' => 'required|string',
            'arival_port' => 'required|string',
            'cruise_id' => 'required|numeric',
        ]);

        $sailing->update($validated);

        return redirect(route('sailings'))->with('success', 'SailingDate Updated SuccessFully');
    }

    public function destroy(SailingDate $sailing) {
        $sailing->delete();
        return redirect(route('sailings'))->with('success', 'SailingDate Deleted SuccessFully');
    }

}
