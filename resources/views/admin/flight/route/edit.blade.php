@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update Route/Transit</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('routes.update', $route->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>From City*</label>
                        <input type="text" class="form-control" placeholder="From City" name="from_city" value="{{$route->from_city}}">
                    </div>
                    <div class="form-group">
                        <label>To City*</label>
                        <input type="text" class="form-control" placeholder="To City" name="to_city" value="{{$route->to_city}}">
                    </div>
                    <div class="form-group">
                        <label>From Airport</label>
                        <input class="form-control" placeholder="From Airport" name="from_airport" value="{{$route->from_airport}}">
                    </div>
                    <div class="form-group">
                        <label>To Airport</label>
                        <input class="form-control" placeholder="To Airport" name="to_airport" value="{{$route->to_airport}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update Route</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection