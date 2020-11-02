<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Promotion;

class PromotionsController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $promotions = Promotion::all();
        return view('admin.promotions.list', compact('promotions'));
    }

    public function create() {
        $hotels = Hotel::all();
        $rooms = Room::all();
        return view('admin.promotions.create', compact('rooms', 'hotels'));
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string',
            'from_date' => 'required',
            'to_date' => 'required',
            'valid_time' => 'numeric',
            'discount' => 'required',
            'valid_for_nationality' => '',
            'hotel_id' => 'required_without:room_id',
            'room_id' => 'required_without:hotel_id',
        ]);

        $promotion = Promotion::create($validated);

        return redirect('admin/promotions')->with('success', 'Promotion Created SuccessFully');
    }

    public function edit(Request $request, Promotion $promotion) {
        $hotels = Hotel::all();
        $rooms = Room::all();
        return view('admin.promotions.edit', compact('rooms', 'hotels', 'promotion'));
    }

    public function update(Request $request, Promotion $promotion) {

        $validated = $request->validate([
            'name' => 'required|string',
            'from_date' => 'required',
            'to_date' => 'required',
            'valid_time' => 'numeric',
            'discount' => 'required',
            'valid_for_nationality' => '',
            'hotel_id' => 'required_without:room_id',
            'room_id' => 'required_without:hotel_id',
        ]);

        $promotion->update($validated);

        return redirect('admin/promotions')->with('success', 'Promotion Updated SuccessFully');
    }

    public function delete(Request $request, Promotion $promotion) {
        $promotion->delete();
        return redirect('admin/promotions')->with('success', 'Promotion Deleted SuccessFully');
    }
}
