<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $message = [
            'firstname.required' => 'Firstname is required',
            'lastname.required' => 'Lastname is required',
            'age.required' => 'Age is required',
            'gender.required' => 'Gender is required',
            'lang.required' => 'Language is required',
            'phone.required' => 'Mobile Number is required',
            'phone.unique' => 'Mobile Number Already Used',
            'email.required' => 'Email is required',
            'email.unique' => 'Email Already Used',
            'username.required' => 'Username is required',
            'username.unique' => 'Username Already Used',
            'password.required' => 'Password is required',
            'password.regex' => 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.'
        ];

        return Validator::make($data, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|unique:users',
            'country' => 'required|string',
            'lang' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|string',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{6,}$/',
        ], $message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'lang' => $data['lang'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'country' => $data['country'],
            'phone' => '+'.$data['phoneex'].$data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
