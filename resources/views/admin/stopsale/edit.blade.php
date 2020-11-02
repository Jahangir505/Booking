@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update StopSale</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('stopsale.update', $stopsale->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>StopSale Name</label>
                        <input type="text" class="form-control" placeholder="StopSale Name" name="name" value="{{$stopsale->name}}">
                    </div>
                    <div class="form-group">
                        <label>Sale Stoped For</label>
                        @switch(class_basename($stopsale->stopsaleable))
                            @case('Flight')
                                <input type="text" value="{{$stopsale->stopsaleable->depature_city.' to '.$stopsale->stopsaleable->arival_city}}" class="form-control" disabled>
                                @break
                            @case('Hotel')
                                <input type="text" value="{{$stopsale->stopsaleable->name}}" class="form-control" disabled>
                                @break
                            @case('Room')
                                <input type="text" value="{{$stopsale->stopsaleable->room_type}}" class="form-control" disabled>
                                @break
                        @endswitch
                    </div>
                    <div class="form-group">
                        <label>StopSale From</label>
                     <input class="form-control datepicker" placeholder="From Date" name="from_date" data-date-format="yyyy-mm-dd" value="{{$stopsale->from_date}}">
                    </div>
                    <div class="form-group">
                        <label>StopSale To</label>
                        <input class="form-control datepicker" placeholder="To Date" name="to_date" data-date-format="yyyy-mm-dd" value="{{$stopsale->to_date}}">
                    </div>
                    <div class="form-group">
                        <label>StopSale For Nationality</label>
                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="{{$stopsale->nationality}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection