<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class NavigationSettingsController extends Controller
{
    public function __contstruct() 
    {
        $this->middleware('admin');
    }

    public function index() {
        try {
            $sections = Section::where('section_type', 'header')->get();

            $navigation = null;
            
            foreach($sections as $section) {

                if ($section->section_name == "navigation") {
                    $navigation = $section;
                } 
            }

        } catch(Exception $e) {
            
        }

        return view('admin.settings.navigation.create', compact('navigation'));
    }

    public function store(Request $request) {

       $section = Section::firstOrNew(["section_type" => $request->input('section_type'), "section_name" => $request->input("section_name")]);

       $section->properties = json_encode($request->input('properties'));

       $section->save();
        
       return redirect('admin/navigation')->with('success', 'Navigation Created SuccessFully');
    }
}
