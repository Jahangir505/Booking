@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Meal</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('meals.store')}}" autocomplete="off" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Select Cruise Mealplan</label>
                        <select name="meal_plan_id" class="form-control">
                            <option value="" selected>Select A Mealplan </option>
                           @foreach ($mealplans as $mealplan)
                                <option value="{{$mealplan->id}}">{{$mealplan->cruise->name}} ({{$mealplan->date}})</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foods</label>
                        <select name="food_id" class="form-control">
                            <option value="" selected>Select A Food </option>
                           @foreach ($foods as $food)
                                <option value="{{$food->id}}">{{$food->name}}</option>
                           @endforeach
                        </select>
                    </div>

                   <div class="form-group">
                       <label>Meal Type</label>
                       <input type="text" name="type"  class="form-control" placeholder="e.g. breakfast,dinner">
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