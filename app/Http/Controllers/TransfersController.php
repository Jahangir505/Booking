<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;

class TransfersController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $transfers = Transfer::all();
        return view('admin.transfer.list', compact('transfers'));
    }

    public function create() {
        return view('admin.transfer.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'car_type' => 'required|string',
            'transfer_type' => 'required|string',
            'car_description' => 'required|string',
            'maximum_luggage' => 'required|numeric',
            'maximum_pax' => 'required|numeric'
        ]);

        $transfer = Transfer::create($validated);

        return redirect(route('transfers'))->with('success', 'Transfer Created SuccessFully');
    }

    public function edit(Request $request, Transfer $transfer) {
        return view('admin.transfer.edit', compact('transfer'));
    }

    public function update(Request $request, Transfer $transfer) {
        
        $validated = $request->validate([
            'car_type' => 'required|string',
            'transfer_type' => 'required|string',
            'car_description' => 'string',
            'maximum_luggage' => 'required|numeric',
            'maximum_pax' => 'required|numeric'
        ]);

        $transfer->update($validated);

        return redirect(route('transfers'))->with('success', 'Transfer Updated SuccessFully');
    }


    public function delete(Request $request, Transfer $transfer) {
        $transfer->delete();
        return redirect(route('transfers'))->with('success', 'Transfer Deleted SuccessFully');
    }
}
