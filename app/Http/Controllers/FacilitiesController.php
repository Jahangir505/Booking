<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

class FacilitiesController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $facilities  = Facility::all();
        return view('admin.facilities.list', compact('facilities'));
    }

    public function create() {
        return view('admin.facilities.create');
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $facility = Facility::create($validate);

        return redirect(route('facilities'))->with('success', 'Facilities Created SuccessFully');
    }

    public function edit(Request $request, Facility $facility) {
        return view('admin.facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility) {
        $validate = $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $facility->update($validate);

        return redirect(route('facilities'))->with('success', 'Facilities Updated SuccessFully');
    }

    public function delete(Request $request, Facility $facility) {
        $facility->delete();
        return redirect(route('facilities'))->with('success', 'Facilities Deleted SuccessFully');
    }
}
