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
                <form action="{{route('transfers.store')}}" autocomplete="off" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Car Type*</label>
                        <select name="car_type" class="form-control">
                            <option value="" selected>Please Select Car Type</option>
                            <option value="Shuttle">Shuttle</option>
                            <option value="Private Standard">Private Standard Car</option>
                            <option value="Private Larger">Private Larger Car</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Transfer Type</label>
                        <select name="transfer_type" class="form-control">
                            <option value="" selected>Please Select Transfer Type</option>
                            <option value="Country">Country</option>
                            <option value="City">City</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" name="car_description" class="form-control" placeholder="Short Description">
                    </div>

                    <div class="form-group">
                        <label>Maximum Passinger</label>
                        <input class="form-control" placeholder="Maximum Passinger" name="maximum_pax" type="number">
                    </div>

                    <div class="form-group">
                        <label>Maximum Luagges</label>
                        <input class="form-control" placeholder="Maximum Passinger" name="maximum_luggage" type="number">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Save Transfer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection