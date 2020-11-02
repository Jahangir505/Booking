<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealPlan;
use App\Models\Cruise;
use App\Models\Food;
use App\Models\Meal;

class MealPlanController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function mealplan_listing() {
        $mealplans = MealPlan::all();
        return view('admin.cruise.mealplan.list', compact('mealplans'));
    }

    public function mealplan_create() {
        $cruises = Cruise::all();
        return view('admin.cruise.mealplan.create', compact('cruises'));
    }

    public function mealplan_store(Request $request) {

        $validated = $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'notes' => 'required|string',
            'cruise_id' => 'required|numeric'
        ]);

        $mealplan = MealPlan::create($validated);

        return redirect(route('mealplans'))->with('success', 'Mealplan Created SuccessFully');
    }

    public function mealplan_edit(Request $request, MealPlan $mealplan) {
        $cruises = Cruise::all();
        return view('admin.cruise.mealplan.edit', compact('cruises', 'mealplan'));
    }

    public function mealplan_update(Request $request, MealPlan $mealplan) {

        $validated = $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'notes' => 'required|string',
            'cruise_id' => 'required|numeric'
        ]);

        $mealplan->update($validated);

        return redirect(route('mealplans'))->with('success', 'Mealplan Updated SuccessFully');;

    }

    public function mealplan_destroy(MealPlan $mealplan) {
        $mealplan->delete();
        return redirect(route('mealplans'));
    }


    public function food_listing() {
        $foods = Food::all();
        return view('admin.cruise.mealplan.food.list', compact('foods'));
    }

    public function food_create() {
        return view('admin.cruise.mealplan.food.create');
    }

    public function food_store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|numeric',
            'unit' => 'string',
            'calories' => 'numeric',
            'protein' => 'numeric',
            'carb' => 'numeric',
            'fat' => 'numeric'
        ]);

        $food = Food::create($validated);

        return redirect(route('foods'))->with('success', 'Food Created SuccessFully');;
    }


    public function food_edit(Request $request, Food $food) {
        return view('admin.cruise.mealplan.food.edit', compact('food'));
    }

    public function food_update(Request $request, Food $food) {
        $validated = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|numeric',
            'unit' => 'string',
            'calories' => 'numeric',
            'protein' => 'numeric',
            'carb' => 'numeric',
            'fat' => 'numeric'
        ]);

        $food->update($validated);

        return redirect(route('foods'))->with('success', 'Mealplan Updated SuccessFully');
    }

    public function food_destroy(Food $food) {
        $food->delete();
        return redirect(route('foods'))->with('success', 'Mealplan Deleted SuccessFully');
    }

    public function meal_listing() {
        $meals = Meal::all();
        return view('admin.cruise.mealplan.meal.list', compact('meals'));
    }

    public function meal_create() {
        $mealplans = MealPlan::where('date', '>=', date('Y-m-d'))->get();
        $foods = Food::all();
        return view('admin.cruise.mealplan.meal.create', compact('mealplans', 'foods'));
    }

    public function meal_store(Request $request) {
        $validated = $request->validate([
            'type' => 'required|string',
            'meal_plan_id' => 'required|numeric',
            'food_id' => 'required|numeric'
        ]);

        $meal = Meal::create($validated);

        return redirect(route('meals'))->with('success', 'Meal Created SuccessFully');
    }

    public function meal_edit(Request $request, Meal $meal) {
        $mealplans = MealPlan::where('date', '>=', date('Y-m-d'))->get();
        $foods = Food::all();
        return view('admin.cruise.mealplan.meal.edit', compact('meal', 'mealplans', 'foods'));
    }

    public function meal_update(Request $request, Meal $meal) {
        $validated = $request->validate([
            'type' => 'required|string',
            'meal_plan_id' => 'required|numeric',
            'food_id' => 'required|numeric'
        ]);

        $meal->update($validated);

        return redirect(route('meals'))->with('success', 'Meal Updated SuccessFully');
    }

    public function meal_destroy(Meal $meal) {
        $meal->delete();
        return redirect(route('meals'))->with('success', 'Meal Deleted SuccessFully');
    }

}
