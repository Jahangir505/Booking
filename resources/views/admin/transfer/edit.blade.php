@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Transfer</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('transfers.update', $transfer->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Car Type*</label>
                        <select name="car_type" class="form-control">
                            <option value="Shuttle" @if($transfer->car_type == 'Shuttle') selected @endif>Shuttle</option>
                            <option value="Private Standard"  @if($transfer->car_type == 'Private Standard') selected @endif>Private Standard Car</option>
                            <option value="Private Larger" @if($transfer->car_type == 'Private Larger') selected @endif>Private Larger Car</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Transfer Type</label>
                        <select name="transfer_type" class="form-control">
                            <option value="Country" @if($transfer->car_type == 'Country') selected @endif>Country</option>
                            <option value="City" @if($transfer->car_type == 'City') selected @endif>City</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" name="car_description" class="form-control" placeholder="Short Description" value="{{$transfer->car_description}}">
                    </div>

                    <div class="form-group">
                        <label>Maximum Passinger</label>
                        <input class="form-control" placeholder="Maximum Passinger" name="maximum_pax" type="number"  value="{{$transfer->maximum_pax}}">
                    </div>

                    <div class="form-group">
                        <label>Maximum Luagges</label>
                        <input class="form-control" placeholder="Maximum Passinger" name="maximum_luggage" type="number"  value="{{$transfer->maximum_luggage}}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Update Transfer Vehicle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection