@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update Transfer Pricing</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('pricings.update', $transferPricing->id)}}" autocomplete="off" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="city_url" value="{{route('pricings.cities')}}">
                    <div class="form-group">
                        <label>Country</label>
                        <select name="country" class="form-control" id="country">
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}" @if($country->name == $transferPricing->country) selected @endif>{{$country->name}} ({{$country->iso_3166_2}})</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label>Rate Zone</label>
                        <select name="rate_zone" class="form-control" id="rate_zone">
                            <option value="{{$transferPricing->rate_zone}}" selected>{{$transferPricing->rate_zone}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Rate Per Car/Person</label>
                        <select name="rate_per" class="form-control">
                            <option value="person" @if($transferPricing->rate_per == 'person') selected @endif>Person</option>
                            <option value="car"  @if($transferPricing->rate_per == 'car') selected @endif>Car</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Currency</label>
                        <select name="currency" class="form-control" id="country">
                            @foreach ($countries as $country)
                                <option value="{{$country->currency_code}}"  @if($transferPricing->currency == $country->currency_code) selected @endif>{{$country->currency_code}} ({{$country->currency_symbol}})</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Starting Price</label>
                        <input type="number" name="start_cost" class="form-control" placeholder="Starting Price e.g. 10" value="{{$transferPricing->start_cost}}">
                    </div>

                    <div class="form-group">
                        <label>Rate unit</label>
                        <select name="price_per" class="form-control">
                            <option value="km" @if($transferPricing->currency == 'km') selected @endif>Km</option>
                            <option value="mph" @if($transferPricing->currency == 'mph') selected @endif>MPH</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price for every unit</label>
                        <input class="form-control" placeholder="Price For Every Km\Mph" name="price" type="number" value="{{$transferPricing->price}}">
                    </div>

                    <div class="form-group">
                        <label>Nationality</label>
                        <select name="nationality" class="form-control">
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}" @if($country->name == $transferPricing->nationality) selected @endif>{{$country->name}} ({{$country->iso_3166_2}})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Transfer Vehicle</label>
                        <select name="transfer_id" class="form-control">
                            @foreach ($transfers as $transfer)
                                <option value="{{$transfer->id}}" @if($transfer->id == $transferPricing->transfer->id) @endif>{{$transfer}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Update Transfer Price</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection