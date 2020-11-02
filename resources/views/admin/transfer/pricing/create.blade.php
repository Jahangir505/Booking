@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Transfer Pricing</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('pricings.store')}}" autocomplete="off" method="POST">
                    @csrf
                    <input type="hidden" id="city_url" value="{{route('pricings.cities')}}">
                    <div class="form-group">
                        <label>Country</label>
                        <select name="country" class="form-control" id="country">
                            <option value="" selected>Please Select A Country</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}">{{$country->name}} ({{$country->iso_3166_2}})</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label>Rate Zone</label>
                        <select name="rate_zone" class="form-control" id="rate_zone">
                            <option value="" selected>Please Select Country First</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Rate Per Car/Person</label>
                        <select name="rate_per" class="form-control">
                            <option value="" selected>Please Select An Option</option>
                            <option value="person">Person</option>
                            <option value="car">Car</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Currency</label>
                        <select name="currency" class="form-control" id="country">
                            <option value="" selected>Please Select A Currency</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->currency_code}}">{{$country->currency_code}} ({{$country->currency_symbol}})</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Starting Price</label>
                        <input type="number" name="start_cost" class="form-control" placeholder="Starting Price e.g. 10">
                    </div>

                    <div class="form-group">
                        <label>Rate unit</label>
                        <select name="price_per" class="form-control">
                            <option value="" selcted>Please Select An Option</option>
                            <option value="km">Km</option>
                            <option value="mph">MPH</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price for every unit</label>
                        <input class="form-control" placeholder="Price For Every Km\Mph" name="price" type="number">
                    </div>

                    <div class="form-group">
                        <label>Nationality</label>
                        <select name="nationality" class="form-control">
                            <option value="" selected>Please Select A Country</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}">{{$country->name}} ({{$country->iso_3166_2}})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Transfer Vehicle</label>
                        <select name="transfer_id" class="form-control">
                            <option value="" selected>Please Select A Vehicle</option>
                            @foreach ($transfers as $transfer)
                                <option value="{{$transfer->id}}">{{$transfer}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Save Transfer Price</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection