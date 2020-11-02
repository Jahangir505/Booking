<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Gallery;
use App\Models\Facility;

use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HotelSettingsController extends Controller
{
    use UploadTrait;

    public function __construct() 
    {
        $this->middleware('admin');
    }

    public function index() 
    {
        $hotels = Hotel::all();

        return view('admin.hotels.hotel_list', compact('hotels'));
    }

    public function create() 
    {
        $facilities = Facility::where('type', 'hotel')->get();

        return view('admin.hotels.create_hotel', compact('facilities'));
    }

    public function store(Request $request) 
    {

        $request->validate([
            "name" => "required",
            "stars" => "required",
            "location" => "required",
        ]);
        
        $hotel = Hotel::create($request->except(['files', 'facilities']));
        
        if ($request->has('files') && $request->hasFile('files')) 
        {

            $images = $request->file('files');

            foreach($images as $image) 
            {
                $name = Str::slug($request->input('name')).'_'.time();
                $filePath = $this->uploadOne($image, '/uploads/hotels', 'public', $name);
                $hotel->images()->create(['image' => $filePath]);
            }

        }

        if($request->has('facilities')) 
        {
            $hotel->facilities = json_encode($request->input('facilities'));
        }

        $hotel->save();

        return ['message' => 'success', 'redirect' => route('hotels')];

    }

    public function edit(Request $request, Hotel $hotel) 
    {
        $facilities = Facility::where('type', 'hotel')->get();
       
        return view('admin.hotels.edit_hotel', compact('hotel', 'facilities'));
    }

    public function update(Request $request, Hotel $hotel) 
    {
        
        $validate = $request->validate([
            'name' => 'required',
            'stars' => 'required',
            'location' => 'required',
        ]);
            
        $hotel->update($request->except('files', 'facilities'));

        if ($request->has('files') && $request->hasFile('files')) 
        {

            $images = $request->file('files');

            foreach($images as $image) 
            {
                $name = Str::slug($request->input('name')).'_'.time();
                $filePath = $this->uploadOne($image, '/uploads/hotels', 'public', $name);
                $hotel->images()->create(['image' => $filePath]);
            }

        }

        if($request->has('facilities')) 
        {
            $hotel->facilities = json_encode($request->input('facilities'));
        }

        $hotel->save();

        return ['message' => 'success', 'redirect' => route('hotels')];
    }

    public function delete(Request $request, Hotel $hotel) 
    {
        
        if($hotel->images) 
        {
            foreach($hotel->images as $image) 
            {
                Storage::disk('public')->delete($image->image);
            }
        }

        $hotel->delete();

        return redirect('admin/hotels')->with('success', "Hotel Deleted SuccessFully");
    }

    public function delete_gallery(Request $request, Gallery $gallery) {
        $gallery->delete();
        return ['message' => 'success'];
    }
}
