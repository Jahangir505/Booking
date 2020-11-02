<?php

namespace App\Http\Controllers;

use App\WAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as input;
use App\User;
use App\Models\General;

use Auth;
use Hash;

use PragmaRX\Countries\Package\Countries;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile');
    }

    public function validator(array $data)
    {

        $messages = [
            'fName.required' => 'First Name is required',
            'lName.required' => 'Last Name is required',
            'address1.required' => 'Address1 is required',
            'city.required' => 'City is required',
            'zip.required' => 'Zip Code is required',
            'state.required' => 'State is required',
            'country.required' => 'Country is required'
        ];

        return Validator::make($data, [
            'fName' => 'required',
            'lName' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'state' => 'required',
            'country' => 'required'
        ], $messages);

    }

    public function phoneValidator(array $data)
    {
        $messages = [
            'mobile.required' => 'Phone Number is required',
            'mobile.unique' => 'Phone number already used',
        ];

        return Validator::make($data, [
            'mobile' => 'required|unique:users,id,'.Auth::user()->id,
        ], $messages);
    }

    public function detailUpdate(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = Auth::user();
        $user->update($request->all());

        $user->fupdatedProfile = 1;
        $user->save();

        return redirect()->route('profile')->with(['success' => 'Successfully Updated Your Profile.']);
    }

    public function smsverify(Request $request)
    {
        $this->phoneValidator($request->all())->validate();

        $user = Auth::user();
        $code = mt_rand(100000, 999999);
        $user->update([
            'mobile' => $request->mobile,
            'secretcode' => $code,
            'vsent' => time()
        ]);

        send_sms($user->mobile, 'Your verification code is '.$code.' From FLEXXO');

        return response()->json(['status' => 200]);
    }

    public function resendsmsverify(Request $request)
    {
        $user = Auth::user();
        $code = mt_rand(100000, 999999);
        $user->update([
            'secretcode' => $code,
            'vsent' => time()
        ]);

        send_sms($user->mobile, 'Your verification code is '.$code.' From FLEXXO');
        return response()->json(['status' => 200]);
    }

    public function verifyCode(Request $request)
    {
        $user = Auth::user();
        if($user->secretcode == $request->code) {
            $user->smsv = 1;
            $user->save();
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 500]);
        }
    }


}
