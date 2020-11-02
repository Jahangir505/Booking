@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update Flight Price</span>
                </div>
            </div>
            <div class="portlet-body">
                <form action="{{route('flightprices.update', $flightPrice->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Route*</label>
                        <select name="route_id" class="form-control">
                            @foreach ($routes as $route)
                                <option value="{{$route->id}}" @if($route->id == $flightPrice->route->id) selected @endif>{{$route->getRouteName()}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>TakeOf Date*</label>
                        <input type="text" class="form-control datepicker" placeholder="Takeof Date" name="take_of_date" data-date-format="yyyy-mm-dd" value="{{$flightPrice->take_of_date}}">
                    </div>

                    <div class="form-group">
                        <label>TakeOf Time*</label>
                         <div class="input-group">
                            <input type="text" class="form-control timepicker timepicker-12" readonly="" placeholder="click the clock icon" name="take_of_time" value="{{$flightPrice->take_of_time}}">
                            <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-clock-o"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Price Per Adult*</label>
                        <input class="form-control" placeholder="Price Per Adult" name="price_per_adult" type="number" value="{{$flightPrice->price_per_adult}}">
                    </div>

                    <div class="form-group">
                        <label>Price Per Child*</label>
                        <input class="form-control" placeholder="Price Per Child" name="price_per_child" type="number" value="{{$flightPrice->price_per_child}}">
                    </div>

                    <div class="form-group">
                        <label>Price Per Infant*</label>
                        <input class="form-control" placeholder="Price Per Infant" name="price_per_infant" type="number" value="{{$flightPrice->price_per_infant}}">
                    </div>

                    <div class="form-group">
                        <label>Available Seats</label>
                        <input class="form-control" placeholder="Available Seats" name="available_seat" type="number" value="{{$flightPrice->available_seat}}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Update Price</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection