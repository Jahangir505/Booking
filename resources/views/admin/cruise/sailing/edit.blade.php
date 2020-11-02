@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update Sailing Date</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('sailings.update', $sailing->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Sailing Date For Cruise</label>
                        <select name="cruise_id" class="form-control">
                           @foreach ($cruises as $cruise)
                           <option value="{{$cruise->id}}" @if($cruise->id == $sailing->cruise->id) selected @endif>{{$cruise->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Departure Date</label>
                        <input  class="form-control datepicker" placeholder="Deaprture Date" name="departure_date" data-date-format="yyyy-mm-dd" value="{{$sailing->departure_date}}">
                    </div>
                    <div class="form-group">
                        <label>Arival Date</label>
                        <input  class="form-control datepicker" placeholder="Arival Date" name="arival_date" data-date-format="yyyy-mm-dd" value="{{$sailing->arival_date}}">
                    </div>
                   <div class="form-group">
                       <label>Number Nights</label>
                       <input type="number" name="number_of_nights"  class="form-control" placeholder="Number Of Nights" value="{{$sailing->number_of_nights}}">
                   </div>
                   <div class="form-group">
                       <label>Destination\River</label>
                       <input type="text" name="destination"  class="form-control" placeholder="Destionation" value="{{$sailing->destination}}">
                   </div>
                   <div class="form-group">
                       <label>Departure/Port</label>
                       <input type="text" name="departure_port"  class="form-control" placeholder="Departure Port" value="{{$sailing->departure_port}}">
                   </div>
                   <div class="form-group">
                       <label>Arival/Port</label>
                       <input type="text" name="arival_port"  class="form-control" placeholder="Arival Port" value="{{$sailing->arival_port}}">
                   </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update Sailing Date</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection