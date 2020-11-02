<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Traits\UploadTrait;
use App\Models\Cruise;

class CruiseController extends Controller
{
    use UploadTrait;

    public function __construct() {
        $this->middleware('admin');
    }

    public function index()
    {
        $cruises = Cruise::all();
        return view('admin.cruise.list', compact('cruises'));
    }

    
    public function create()
    {
        return view('admin.cruise.create');
    }

    
    public function store(Request $request)
    {
      
        $validated = $request->validate([
            'name' => 'required',
            'number_of_rooms' => 'required|numeric',
        ]);

        $cruise = Cruise::create($validated);

        if ($request->hasFile('logo')) {

            $name = Str::slug($request->input('name')).'_'.time();
            $filePath = $this->uploadOne($request->file('logo'), '/uploads/cruise', 'public', $name);
            $cruise->logo = $filePath;
        
        }

        if($request->has('facilities')) {
            $cruise->facilities = json_encode($request->input('facilities'));
        }

        $cruise->save();

        return redirect(route('cruises'))->with('success', 'Cruise Created SuccessFully');
    }


    public function edit(Cruise $cruise)
    {
        return view('admin.cruise.edit', compact('cruise'));
    }

   
    public function update(Request $request, Cruise $cruise)
    {
        $validated = $request->validate([
            'name' => 'required',
            'number_of_rooms' => 'required|numeric',
        ]);

        $cruise->update($validated);

        if ($request->hasFile('logo')) {

            $name = Str::slug($request->input('name')).'_'.time();
            $filePath = $this->uploadOne($request->file('logo'), '/uploads/cruise', 'public', $name);
            $cruise->logo = $filePath;
        
        }
        
        if($request->has('facilities')) {
            $cruise->facilities = json_encode($request->input('facilities'));
        }

        $cruise->save();

        return redirect(route('cruises'))->with('success', 'Cruise Updated SuccessFully');

    }

   
    public function destroy(Cruise $cruise)
    {
        $cruise->delete();

        return redirect(route('cruises'))->with('success', 'Cruise Deleted SuccessFully');
    }
}
