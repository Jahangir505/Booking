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
                <form action="{{route('mealplans.store')}}" autocomplete="off" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>MealPlan For Which Cruise</label>
                        <select name="cruise_id" class="form-control">
                            <option value="" selected>Select A Cruise </option>
                           @foreach ($cruises as $cruise)
                                <option value="{{$cruise->id}}">{{$cruise->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>MealPlan Date</label>
                        <input  class="form-control datepicker" placeholder="MealPlan Date" name="date" data-date-format="yyyy-mm-dd">
                    </div>

                   <div class="form-group">
                       <label>Something About This Plan</label>
                       <input type="text" name="notes"  class="form-control" placeholder="something about this plan">
                   </div>
                    <div class="form-group">
                        <button class="btn btn-success">Save MealPlan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection