@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Flight Data</span>
                </div>
                
            </div>
            <div class="portlet-body form">

                <form class="form" role="form" method="POST" action="{{route('flights.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="flight_price_url" value="{{route('flights.prices')}}">
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group @if($errors->has('route_id')) has-error @endif">
                                        <label  name="route_id">Routes</label>
                                        <select name="route_id" class="form-control" id="routeId">
                                            <option value="">Please Select A route</option>
                                           @foreach ($routes as $route)
                                            <option value="{{$route->id}}">{{$route->getRouteName()}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('airlines')) has-error @endif">
                                    <label name="airline_id">Airlines</label>
                                    <select name="airline_id" class="form-control">
                                       @foreach ($airlines as $airline)
                                        <option value="{{$airline->id}}">{{$airline->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('class')) has-error @endif">
                                    <label class="control-label">Select class</label>
                                    <select name="class" id="" class="form-control">
                                        <option value="economy">Economy</option>
                                        <option class="premimum_economy">Premimum Economy</option>
                                        <option value="BUSINESS">Business</option>
                                        <option class="first">First</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('departure_city')) has-error @endif">
                                    <label >Departure City</label>
                                    <input type="text" class="form-control" placeholder="departure" name="departure_city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('arival_city')) has-error @endif">
                                    <label class="control-label">Arival City</label>
                                    <input type="text" class="form-control" placeholder="Arival City" name="arival_city">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('departure_date')) has-error @endif">
                                    <label class="control-label">Departure Date</label>
                                    <div class="input-group  date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" readonly="" name="departure_date" placeholder="departure date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('arival_date')) has-error @endif">
                                    <label class="control-label">Arival Date</label>
                                    <div class="input-group  date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" readonly="" name="arival_date" placeholder="Arival Date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('departure_time')) has-error @endif">
                                    <label class="control-label">departure Time</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker timepicker-12" readonly="" name="departure_time" placeholder="departure Time">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-clock-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('arival_time')) has-error @endif">
                                    <label class="control-label">Arival Time</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker timepicker-12" readonly="" name="arival_time" placeholder="Arival Time">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-clock-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Ticket Price</label>
                                <select name="flightprice_id" id="flightPriceHolder" class="form-control">
                                    <option value="">Please Select A Route For Get Prices</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group @if($errors->has('transit')) has-error @endif">
                                <label for="">This Flight is (Non-Stop) ?</label>
                                <select name="transit" id="transit" class="form-control">
                                    <option value="">Please Select A Option</option>
                                    <option value="no">No</option>
                                    <option value="yes">Yes </option>
                                </select>
                            </div>

                            <div id="stopover">
                                <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" placeholder="StopOver Place E.g Airport Name" name="stopover[0][place]">
                                </div>
                                <div class="col-md-4 from-group">
                                    {{-- <input type="text" class="form-control" placeholder="StopOver Time E.g. 2hours" name="stopover[0][time]"> --}}
                                    <input class="form-control form-datetime"  type="text" readonly placeholder="arival date and time" name="stopover[0][arival_time]">
                                </div>
                                <div class="col-md-4 from-group">
                                    {{-- <input type="text" class="form-control" placeholder="StopOver Time E.g. 2hours" name="stopover[0][time]"> --}}
                                    <input class="form-control form-datetime"  type="text" readonly placeholder="departure date and time" name="stopover[0][departure_time]">
                                </div>
                              
                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" id="addstops">Add One More Stops</button>
                                </div>
                            </div>
                     
                            <div class="col-md-12">
                                <button type="submit" class="btn green btn-block btn-lg">Create Flight</button>
                            </div>
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection