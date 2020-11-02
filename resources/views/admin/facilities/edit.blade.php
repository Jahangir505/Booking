@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Facility</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('facilities.update', $facility->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Facility For</label>
                        <select name="type" class="form-control">
                            <option value="" selected>Select Facility For</option>
                            <option value="room" @if($facility->type == 'room') selected @endif>Room</option>
                            <option value="hotel"  @if($facility->type == 'hotel') selected @endif>Hotel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Facility name</label>
                        <input type="text" class="form-control" name="name" placeholder="Facility name" value="{{$facility->name}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update Facility</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection