<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Facility;

use App\Traits\UploadTrait;

class RoomSettingsController extends Controller
{
    use UploadTrait;

    public function __construct() 
    {
        $this->middleware('admin');
    }


    public function index() 
    {
        $rooms = Room::all();

        return view('admin.hotels.room_list', compact('rooms'));
    }

    public function create() 
    {
        $hotels =  Hotel::all();
        $facilities = Facility::where('type', 'room')->get();

        return view('admin.hotels.create_room', compact('hotels', 'facilities'));
    }

    public function store(Request $request) 
    {

        $validate = $request->validate([
            'room_type' => 'required',
            'hotel_id' => 'required',
        ]);
        
        $room = Room::create($request->except(['facilities', 'files']));


        if ($request->has('files') && $request->hasFile('files')) 
        {

            $images = $request->file('files');

            foreach($images as $image) 
            {
                $name = Str::slug($request->input('name')).'_'.time();
                $filePath = $this->uploadOne($image, '/uploads/rooms', 'public', $name);
                $room->images()->create(['image' => $filePath]);
            }

        }

        if($request->has('facilities')) 
        {
            $room->facilities = json_encode($request->input('facilities'));
        }


        $room->save();

        return ['message' => 'success', 'redirect' => route('rooms')];
    }


    public function edit(Request $request, Room $room) {

        $hotels = Hotel::all();

        $facilities = Facility::where('type', 'room')->get();

        return view('admin.hotels.edit_room', compact('room', 'hotels', 'facilities'));
    }

    public function update(Request $request, Room $room) 
    {

        $validate = $request->validate([
            'room_type' => 'required',
            'hotel_id' => 'required',
        ]);

        $room->update($request->except(['facilities', 'files']));

       
        if ($request->has('files') && $request->hasFile('files')) 
        {
            
            $images = $request->file('files');

            foreach($images as $image) 
            {
                $name = Str::slug($request->input('name')).'_'.time();
                $filePath = $this->uploadOne($image, '/uploads/rooms', 'public', $name);
                $room->images()->create(['image' => $filePath]);
            }

        }

        if($request->has('facilities')) 
        {
            $room->facilities = json_encode($request->input('facilities'));
        }


        $room->save();

        return ['message' => 'success', 'redirect' => route('rooms')];
    }

    public function delete(Request $request, Room $room) 
    {
        if($room->images) {
            foreach($room->images as $image) {
                Storage::disk('public')->delete($image->image);
            }
        }

        $room->delete();

        return redirect('admin/rooms')->with('success', 'Room Deleted SuccessFully');
    }
}
