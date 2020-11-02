@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Flight Price</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('flightprices.store')}}" autocomplete="off" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Route*</label>
                        <select name="route_id" class="form-control">
                            <option value="" selected>Please Select A Route</option>
                            @foreach ($routes as $route)
                                <option value="{{$route->id}}">{{$route->getRouteName()}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>TakeOf Date*</label>
                        <input type="text" class="form-control datepicker" placeholder="Takeof Date" name="take_of_date" data-date-format="yyyy-mm-dd">
                    </div>

                    <div class="form-group">
                        <label>TakeOf Time*</label>
                         <div class="input-group">
                            <input type="text" class="form-control timepicker timepicker-12" readonly="" placeholder="click the clock icon" name="take_of_time">
                            <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-clock-o"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Price Per Adult*</label>
                        <input class="form-control" placeholder="Price Per Adult" name="price_per_adult" type="number">
                    </div>

                    <div class="form-group">
                        <label>Price Per Child*</label>
                        <input class="form-control" placeholder="Price Per Child" name="price_per_child" type="number">
                    </div>

                    <div class="form-group">
                        <label>Price Per Infant*</label>
                        <input class="form-control" placeholder="Price Per Infant" name="price_per_infant" type="number">
                    </div>

                    <div class="form-group">
                        <label>Available Seats</label>
                        <input class="form-control" placeholder="Available Seats" name="available_seat" type="number">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Save Price</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection