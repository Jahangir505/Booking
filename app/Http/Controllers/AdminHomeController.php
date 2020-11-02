<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $users[] = \Auth::user();
        $users[] = \Auth::guard()->user();
        $users[] = \Auth::guard('admin')->user();
    
        //dd($users);
    
        return view('admin.home');
    }
}
