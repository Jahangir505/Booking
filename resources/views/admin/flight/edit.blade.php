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

                <form class="form" role="form" method="POST" action="{{route('flights.update', $flight->id)}}">
                    {{ csrf_field() }}
                    @method('PATCH')
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
                                                <option value="{{$route->id}}" @if($route->id == $flight->route->id) selected @endif>{{$route->getRouteName()}}</option>
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
                                        <option value="{{$airline->id}}" @if($airline->id == $flight->airline->id) selected @endif>{{$airline->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('class')) has-error @endif">
                                    <label class="control-label">Select class</label>
                                    <select name="class" id="" class="form-control">
                                        <option value="economy"  @if($flight->class == 'economy') selected @endif>Economy</option>
                                        <option class="premimum_economy" @if($flight->class == 'premimum_economy') selected @endif>Premimum Economy</option>
                                        <option class="first" @if($flight->class == 'first') selected @endif>First</option>
                                        <option value="BUSINESS" @if($flight->class == 'BUSINESS') selected @endif>Business</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('departure_city')) has-error @endif">
                                    <label >Departure City</label>
                                    <input type="text" class="form-control" placeholder="departure" name="departure_city" value="{{$flight->departure_city}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('arival_city')) has-error @endif">
                                    <label class="control-label">Arival City</label>
                                    <input type="text" class="form-control" placeholder="Arival City" name="arival_city" value="{{$flight->arival_city}}">
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
                                        <input type="text" class="form-control" readonly="" name="departure_date" placeholder="departure date" value="{{$flight->departure_date}}">
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
                                        <input type="text" class="form-control" readonly="" name="arival_date" placeholder="Arival Date" value="{{$flight->arival_date}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('departure_time')) has-error @endif">
                                    <label class="control-label">departure Time</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker timepicker-12" readonly="" name="departure_time" placeholder="departure Time" value="{{$flight->departure_time}}">
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
                                        <input type="text" class="form-control timepicker timepicker-12" readonly="" name="arival_time" placeholder="Arival Time" value="{{$flight->arival_time}}">
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
                                    <option value="{{$flight->price->id}}">{{$flight->price->flightPriceLabel}}</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group @if($errors->has('transit')) has-error @endif">
                                <label for="">This Flight is (Non-Stop) ?</label>
                                <select name="transit" id="transit" class="form-control">
                                    <option value="no" @if($flight->transit == 'no') selected @endif>No</option>
                                    <option value="yes" @if($flight->transit == 'yes') selected @endif>Yes</option>
                                </select>
                            </div>

                            @if($flight->transit == 'yes')
                                @foreach ($flight->stops as $stop)
                                    <div class="row col-md-12">
                                        <div class="col-md-4 form-group">
                                            <label>Stop Over Place</label>
                                            <input type="text" class="form-control" placeholder="StopOver Place E.g Airport Name" name="stopover[{{$loop->index}}][place]" value="{{$stop->place}}">
                                        </div>
                                        <div class="col-md-4 from-group">
                                            <label>Arival DateTime</label>
                                            <input type="text" class="form-control" placeholder="Arival DateTime" name="stopover[{{$loop->index}}][arival_time]" value="{{$stop->arival_time}}">
                                        </div>
                                        <div class="col-md-4 from-group">
                                            <label>Departure DateTime</label>
                                            <input type="text" class="form-control" placeholder="Departure DateTime" name="stopover[{{$loop->index}}][departure_time]" value="{{$stop->departure_time}}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            {{-- <div id="stopover">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="StopOver Place E.g Airport Name" name="stopover[0][place]">
                                </div>
                                <div class="col-md-6 from-group">
                                    <input type="text" class="form-control" placeholder="StopOver Time E.g. 2hours" name="stopover[0][time]">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" id="addstops">Add One More Stops</button>
                                </div>
                            </div> --}}
                     
                            <div class="col-md-12">
                                <button type="submit" class="btn green btn-block btn-lg">Update Flight</button>
                            </div>
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection