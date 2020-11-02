<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RoutesController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $routes = Route::all();

        return view('admin.flight.route.list', compact('routes'));
    }

    public function create() {
        return view('admin.flight.route.create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'from_city' => 'required|string',
            'to_city' => 'required',
            'from_airport' => '',
            'to_airport' => ''
        ]);

        $route = Route::create($validated);
        
        return redirect(route('routes'))->with('success', 'Route Created SuccessFully');
    }

    public function edit(Request $request, Route $route) {
        return view('admin.flight.route.edit', compact('route'));
    }

    public function update(Request $request, Route $route) {

        $validated = $request->validate([
            'from_city' => 'required|string',
            'to_city' => 'required',
            'from_airport' => '',
            'to_airport' => ''
        ]);

        $route->update($validated);

        return redirect(route('routes'))->with('success', 'Route Updated SuccessFully');
    }

    public function delete(Request $request, Route $route) {
        $route->delete();
        return redirect(route('routes'))->with('success', 'Route Deleted SuccessFully');
    }
}
