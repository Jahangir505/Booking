<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function mealplan() {
        return $this->belongsTo(MealPlan::class, 'meal_plan_id');
    }

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
