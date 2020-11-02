<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransferPricing;
use App\Models\Transfer;
use App\Traits\JsonParsingTrait;

class TransferPricingsController extends Controller
{
    use JsonParsingTrait;

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $transferPricings = TransferPricing::all();
        return view('admin.transfer.pricing.list', compact('transferPricings'));
    }

    public function create() {
        // $countries = Geo::getCountries();
        $countries = \DB::table('countries')->get();
        $transfers = Transfer::all();
        return view('admin.transfer.pricing.create', compact('countries', 'transfers'));
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'country' => 'required|string',
            'rate_zone' => 'required|string',
            'rate_per' => 'required|string',
            'currency' => 'required|string',
            'start_cost' => 'required|numeric',
            'price_per' => 'required|string',
            'price' => 'required|numeric',
            'nationality' => 'required|string',
            'transfer_id' => 'numeric'
        ]);

        $transferPricing = TransferPricing::create($validated);
        
        return redirect(route('pricings'))->with('success', 'TransferPricing Created SuccessFully');
    }

    public function edit(Request $request, TransferPricing $transferPricing) {
        $countries = \DB::table('countries')->get();
        $transfers = Transfer::all();
        return view('admin.transfer.pricing.edit', compact('countries', 'transferPricing', 'transfers'));
    }

    public function update(Request $request, TransferPricing $transferPricing) {

        $validated = $request->validate([
            'country' => 'required|string',
            'rate_zone' => 'required|string',
            'rate_per' => 'required|string',
            'currency' => 'required|string',
            'start_cost' => 'required|numeric',
            'price_per' => 'required|string',
            'price' => 'required|numeric',
            'nationality' => 'required|string',
            'transfer_id' => 'numeric'
        ]);

        $transferPricing->update($validated);

        return redirect(route('pricings'))->with('success', 'TransferPricing Updated SuccessFully');
    }

    public function delete(Request $request, TransferPricing $transferPricing) {
        $transferPricing->delete();
        return redirect(route('pricings'))->with('success', 'TransferPricing Deleted SuccessFully');
    }

    public function getCities(Request $request) {
        $cities = $this->get_cities($request->input('country'));
        // return Geo::getCountry($request->input('country'))->children()->get();
        return $cities;
    }

}
