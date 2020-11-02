<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Traits\UploadTrait;
use App\Models\Cruise;
use App\Models\CruiseRoom;

class CruiseRoomController extends Controller
{
    use UploadTrait;

    public function __construct() {
        $this->middleware('admin');
    }


    public function index() {
        $cruiseRooms = CruiseRoom::all();
        return view('admin.cruise.room.list', compact('cruiseRooms'));
    }

    public function create() {
        $cruises = Cruise::all();
        return view('admin.cruise.room.create', compact('cruises'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'cruise_id' => 'required|numeric'
        ]);

        $cruiseRoom = CruiseRoom::create($validated);

        if($request->hasFile('roomImages')) {

            $images = $request->file('roomImages');

            foreach($images as $image) 
            {
                $name = Str::slug($request->input('type')).'_'.time();
                $filePath = $this->uploadOne($image, '/uploads/cruise/rooms', 'public', $name);
                $cruiseRoom->images()->create(['image' => $filePath]);
            }
        }

        if($request->has('facilities')) {
            $cruiseRoom->facilities = json_encode($request->input('facilities'));
        }

        $cruiseRoom->save();

        return redirect(route('cruises.rooms'))->with('success', 'Cruise Room Created Succesfully');
    }

    public function edit(CruiseRoom $cruiseRoom) {
        $cruises = Cruise::all();
        return view('admin.cruise.room.edit', compact('cruiseRoom', 'cruises'));
    }

    public function update(Request $request, CruiseRoom $cruiseRoom) {

        $validated = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'cruise_id' => 'required|numeric'
        ]);

        $cruiseRoom->update($validated);

        if($request->hasFile('roomImages')) {

            $images = $request->file('roomImages');

            foreach($images as $image) 
            {
                $name = Str::slug($request->input('type')).'_'.time();
                $filePath = $this->uploadOne($image, '/uploads/cruise/rooms', 'public', $name);
                $cruiseRoom->images()->create(['image' => $filePath]);
            }
        }

        if($request->has('facilities')) {
            $cruiseRoom->facilities = json_encode($request->input('facilities'));
        }

        $cruiseRoom->save();

        return redirect(route('cruises.rooms'))->with('success', 'Cruise Room updated Succesfully');
    }

    public function destroy(CruiseRoom $cruiseRoom) {
        
        if($cruiseRoom->images) {
            foreach($cruiseRoom->images as $image) {
                Storage::disk('public')->delete($image->image);
            }
        }
        
        $cruiseRoom->delete();

        return redirect(route('cruises.rooms'))->with('success', 'Cruise Room Deleted Succesfully');
    }
}
