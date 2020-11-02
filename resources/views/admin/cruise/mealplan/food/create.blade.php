@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add MealPlan</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('foods.store')}}" autocomplete="off" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Food Name</label>
                        <input type="text" class="form-control" placeholder="Food Name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Food Quantity</label>
                        <input  class="form-control" placeholder="quantity" name="quantity" type="number">
                    </div>
                    <div class="form-group">
                        <label>Food Unit</label>
                        <input type="text" class="form-control" placeholder="Food Unit, e.g. piecs, ml, kg" name="unit">
                    </div>
                    <div class="form-group">
                        <label>Food Calories</label>
                        <input  class="form-control" placeholder="calories" name="calories" type="number" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Food Protien</label>
                        <input  class="form-control" placeholder="Protien" name="protein" type="number" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Food Carb</label>
                        <input  class="form-control" placeholder="Carb" name="carb" type="number" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Food Fat</label>
                        <input  class="form-control" placeholder="Fat" name="fat" type="number" step="0.1">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Save Food</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection