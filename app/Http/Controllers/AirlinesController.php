<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Airline;

use App\Traits\UploadTrait;

class AirlinesController extends Controller
{
    use UploadTrait;

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $airlines = Airline::all();
        return view('admin.flight.airline.list', compact('airlines'));
    }

    public function create() {
        return view('admin.flight.airline.create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required'
        ]);
        
        $airline = Airline::create($validated);

        if ($request->has('file') && $request->hasFile('file')) 
        {
            $image = $request->file('file');
            $name = Str::slug($request->input('name')).'_'.time();
            $filePath = $this->uploadOne($image, '/uploads/airlines', 'public', $name);
            $airline->image = $filePath;
            $airline->save();
        }

        return redirect(route('airlines'))->with('success', 'Airline Created SuccessFully');
    }

    public function edit(Request $request, Airline $airline) {
        return view('admin.flight.airline.edit', compact('airline'));
    }


    public function update(Request $request, Airline $airline) {
        
        $validated = $request->validate([
            'name' => 'required'
        ]);
        

        $airline->update($validated);

        if ($request->has('file') && $request->hasFile('file')) 
        {
            $image = $request->file('file');
            $name = Str::slug($request->input('name')).'_'.time();
            $filePath = $this->uploadOne($image, '/uploads/airlines', 'public', $name);
            $airline->image = $filePath;
            $airline->save();
        }

        return redirect(route('airlines'))->with('success', 'Airline Updated SuccessFully');
    }

    public function delete(Request $request, Airline $airline) {
        $airline->delete();
        return redirect(route('airlines'))->with('success', 'Airline Deleted SuccessFully');
    }
}
