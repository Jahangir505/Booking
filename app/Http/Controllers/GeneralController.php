<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use App\Models\General;
use App\Models\Contact;
use App\User;
use App\Admin;
use Auth;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $general = General::first();
        $contact = Contact::first();
        $languages = [
            "en" =>"Russian",
            "fa" => "Farsi",
            "de" => "German",
            "vi" => "Vietnamese",
            "fr" => "French",
            "tr" => "Turkish",
            "ar" => "Arabic",
            "es" => "Spanish",
            "en" => "English"
        ];

        return view('admin.website.general', compact('general', 'languages', 'contact'));
    }

    public function update(Request $request)
    {
        $general = General::first();
        $contact = Contact::first();

        $general_data = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'sometimes|string',
            'copyright' => 'sometimes|string',
            'default_lang' => 'sometimes|string',
            'default_currency' => 'sometimes|string',
            'business_name' => 'required|string',
            'keywords' => 'sometimes|string',
            'description' => 'sometimes|string',
            'offline_message' => 'sometimes|string',
            'booking_expiry' => 'sometimes|numeric',
            'offline' => 'sometimes|numeric',
            'multi_lang' => 'sometimes|numeric',
            'multi_currency' => 'sometimes|numeric',
            'restricated' => 'sometimes|numeric',
            'user_regi' => 'sometimes|numeric',
            'user_approval' => 'sometimes|numeric',
            'review_approval' => 'sometimes|numeric',
            'supplier_regi' => 'sometimes|numeric'
        ]);

        $general->fill($general_data);
        
        if($request->hasFile('business_logo')) {
            $request->validate([
                'business_logo' => 'sometimes|image|mimes:png',
            ]);

            \Storage::delete('public/logo/'.$general->business_logo);
            $request->business_logo->storeAs('logo', 'logo.png', 'public');
        }


        if($request->hasFile('favicon')) {
            $request->validate([
                'favicon' => 'sometimes|image|mimes:png',
            ]);

            \Storage::delete('public/logo/'.$general->favicon);
            $request->favicon->storeAs('logo', 'favicon.png', 'public');
        }

        $general->save();

        $contact_data = $request->validate([
            'phone' => 'sometimes|string',
            'email' => 'sometimes|string|email',
            'address' => 'sometimes|string'
        ]);
        
        $contact->fill($contact_data);
        $contact->save();

        return back()->with('success', 'General Settings Updated Successfully!');
    }

    public function logo()
    {
        return view('admin.website.logo');
    }
    public function logoupdate(Request $request)
    {
        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('logo'))
        {
            $request->logo->move('assets/landing/images','logo.png');
        }
        if($request->hasFile('icon'))
        {
            $request->icon->move('assets','favicon.png');
        }

        return back()->with('success','Logo and Icon Updated successfully.');
    }

    public function changeprofile()
    {
        return view('admin.auth.changepass');
    }

    public function updateprofile(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = Auth::guard('admin')->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;

        $user->save();

        return back()->with('success', 'Profile Updated');

    }

    public function validator(array $data)
    {
        $messages = [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Already used email',
            'username.required' => 'Username is required',
            'username.unique' => 'Already used username'
        ];

        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('admins')->ignore(Auth::guard('admin')->user()->id),
            ],
            'username' => [
                'required',
                'max:255',
                Rule::unique('admins')->ignore(Auth::guard('admin')->user()->id),
            ]
        ],$messages);
    }

    public function updatepass()
    {
        $user = Auth::guard('admin')->user();

        if(Hash::check(Input::get('passwordold'), $user['password']) && Input::get('password') == Input::get('password_confirmation'))
        {
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            return back()->with('success', 'Password Changed');
        }
        else {
            {
                return back()->with('alert', 'Password Not Changed');
            }
        }
    }

}
