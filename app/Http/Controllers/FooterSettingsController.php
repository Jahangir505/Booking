<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class FooterSettingsController extends Controller
{
    public function __contstruct() 
    {
        $this->middleware('admin');
    }

    public function index() {
        try {
            $sections = Section::where('section_type', 'footer')->get();

            $footer_one = null;
            $footer_two = null;
            $footer_three = null;
            $footer_four = null;

            foreach($sections as $section) {

                if ($section->section_name == "footer_one") {

                    $footer_one = $section;

                } elseif ($section->section_name == "footer_two") {

                    $footer_two = $section;

                } elseif ($section->section_name == "footer_three") {

                    $footer_three = $section;

                } elseif ($section->section_name == "footer_four") {

                    $footer_four = $section;
                }
            }

        } catch(Exception $e) {
            
        }

        return view('admin.settings.footer.create', compact('footer_one', 'footer_two', 'footer_three', 'footer_four'));
    }

    public function store(Request $request) {

       $section = Section::firstOrNew(["section_type" => $request->input('section_type'), "section_name" => $request->input("section_name")]);

       $section->title = $request->input('title');

       $section->subtitle = $request->input('subtitle');

       $section->properties = json_encode(array_values($request->input('properties')));

       $section->save();
        
       return redirect('admin/footer')->with('success', 'Footer Section Updated SuccessFully');
    }
}
