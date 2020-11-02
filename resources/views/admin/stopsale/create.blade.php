@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Promotions</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('stopsale.store')}}" autocomplete="off" method="POST">
                    @csrf
                    <input type="hidden" id="data_url" value="{{route('stopsale.related')}}">
                    <input type="hidden" name="stop_sale_for">
                    <div class="form-group">
                        <label>StopSale Name</label>
                        <input type="text" class="form-control" placeholder="StopSale Name" name="name">
                    </div>
                    <div class="form-group">
                        <label>StopSale Type</label>
                        <select name="type" id="stopsale_type" class="form-control">
                            <option value="" selected>Please Select A Type For Stop Seling</option>
                            <option value="flight">Flight</option>
                            <option value="hotel">Hotel</option>
                            <option value="room">Room</option>
                        </select>
                    </div>
                    <div class="form-group" id="stopsaleable">
                        
                    </div>
                    <div class="form-group">
                        <label>StopSale From</label>
                        <input class="form-control datepicker" placeholder="From Date" name="from_date" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="form-group">
                        <label>StopSale To</label>
                        <input class="form-control datepicker" placeholder="To Date" name="to_date" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="form-group">
                        <label>StopSale For Nationality</label>
                        <input type="text" class="form-control" name="nationality" placeholder="Nationality">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection