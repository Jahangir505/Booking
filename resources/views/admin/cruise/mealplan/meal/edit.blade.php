@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update Meal</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('meals.update', $meal->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>MealPlan</label>
                        <select name="meal_plan_id" class="form-control">
                           @foreach ($mealplans as $mealplan)
                                <option value="{{$mealplan->id}}" @if($meal->mealplan->id == $mealplan->id) selected @endif>{{$mealplan->cruise->name}} ({{$mealplan->date}})</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foods</label>
                        <select name="food_id" class="form-control">
                           @foreach ($foods as $food)
                                <option value="{{$food->id}}" @if($meal->food->id == $food->id) selected @endif>{{$food->name}}</option>
                           @endforeach
                        </select>
                    </div>

                   <div class="form-group">
                       <label>Meal Type</label>
                       <input type="text" name="type"  class="form-control" placeholder="e.g. breakfast,dinner" value="{{$meal->type}}">
                   </div>

                    <div class="form-group">
                        <button class="btn btn-success">Save Meal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection