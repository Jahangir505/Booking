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
                <form action="{{route('sailings.store')}}" autocomplete="off" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Sailing Date For Cruise</label>
                        <select name="cruise_id" class="form-control">
                            <option value="" selected>Select A Cruise </option>
                           @foreach ($cruises as $cruise)
                                <option value="{{$cruise->id}}">{{$cruise->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Departure Date</label>
                        <input  class="form-control datepicker" placeholder="Deaprture Date" name="departure_date" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="form-group">
                        <label>Arival Date</label>
                        <input  class="form-control datepicker" placeholder="Arival Date" name="arival_date" data-date-format="yyyy-mm-dd">
                    </div>
                   <div class="form-group">
                       <label>Number Nights</label>
                       <input type="number" name="number_of_nights"  class="form-control" placeholder="Number Of Nights">
                   </div>
                   <div class="form-group">
                       <label>Destination\River</label>
                       <input type="text" name="destination"  class="form-control" placeholder="Destionation">
                   </div>
                   <div class="form-group">
                       <label>Departure/Port</label>
                       <input type="text" name="departure_port"  class="form-control" placeholder="Departure Port">
                   </div>
                   <div class="form-group">
                       <label>Arival/Port</label>
                       <input type="text" name="arival_port"  class="form-control" placeholder="Arival Port">
                   </div>
                    <div class="form-group">
                        <button class="btn btn-success">Save Sailing Date</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection