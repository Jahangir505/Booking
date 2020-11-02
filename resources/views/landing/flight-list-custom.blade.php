@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a> <i class="fas fa-chevron-right"></i> </li>
                    {{-- <li class="breadcrumb-item"><a href="#">{{$query['origin_countryName']}}</a> <i class="fas fa-chevron-right"></i> </li> --}}
                    {{-- <li class="breadcrumb-item"><a href="#">{{$query['origin_cityName']}} </a> <i class="fas fa-chevron-right"></i> </li> --}}
                    {{-- <li class="breadcrumb-item active" aria-current="page">{{$query['destination_cityName']}}</li> --}}
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="titleArea text-left text-light" >
                <h3 class="title">Custom flight list page </h3>
                {{-- <h3 class="title">Flights from {{$query['origin']}} to {{$query['destination']}} on {{$query['departureDate']}} for {{$query['adult']}} adult </h3> --}}
            </div>
            {{-- <div class="alert alert-danger" v-if="error">
                <h2>@{{error.title}}</h2>
                <p>@{{error.detail}}</p>
            </div> --}}
            <section class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="filterArea">
                        <div class="filterBox">
                            <div class="row align-items-center">
                                <h3 class="mr-auto">Filter Your Search</h3>
                                <a href="">Reset All</a>
                                <span class=" d-block d-md-none d-xl-none d-lg-none close hideSidebar"><i class="far fa-times-circle"></i></span>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Price</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="rangerSliderArea">
                                <input type="text" class="js-range-slider" name="my_range" value="" />
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Stops</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="non_stop">
                                <label class="custom-control-label" for="non_stop">Non-stop</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="1_stop">
                                <label class="custom-control-label" for="1_stop">1 Stop</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="more_stops">
                                <label class="custom-control-label" for="more_stops">2+ Stops</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Flight Class</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="economy">
                                <label class="custom-control-label" for="economy">Economy</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="business">
                                <label class="custom-control-label" for="business">Business</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="first">
                                <label class="custom-control-label" for="first">First</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Airlines </h4>
                                <a href="">Clear</a>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="go_business">
                                <label class="custom-control-label" for="go_business">Go Business</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="jet_airways">
                                <label class="custom-control-label" for="jet_airways">Jet Airways</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="air_india">
                                <label class="custom-control-label" for="air_india">Air India</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="go_air">
                                <label class="custom-control-label" for="go_air">Go Air</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="indigo">
                                <label class="custom-control-label" for="indigo">IndiGo</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Departure Time</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="morning">
                                <label class="custom-control-label" for="morning">Morning (12:00am - 11:59am) </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="afternoon">
                                <label class="custom-control-label" for="afternoon">Afternoon (12:00pm - 5:59pm)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="evening">
                                <label class="custom-control-label" for="evening">Evening (6:00pm - 11:59pm)</label>
                            </div>
                        </div>
                        <!-- End filer Box -->
                    </div>
                </div>
                <!--End sidebar   -->

                <div class="col-lg-9 col-md-8">
                    <div class="holidayListingWrap">
                        <button class="showSidebar btn-lg mb-4 btn btn-block btn-orange d-block d-md-none d-xl-none d-lg-none">Show Filter</button>
                        <div class="listingFilter">
                            Short By :
                            <select  name="" id="" class="form-control custom-select">
                                <option value="">Popularity</option>
                                <option value="">Popularity 2</option>
                                <option value="">Popularity 3</option>
                            </select>
                        </div>


                        {{-- <flight-lists 
                            aircraft-Img="{{asset('assets/landing/images/flight.png')}}"
                            air-To="{{asset('assets/landing/images/airTo.png')}}"
                            air-From="{{asset('assets/landing/images/airForm.png')}}">
                        </flight-lists> --}}
              
                        @foreach ($flights as $flight)
                            <div class="singleList">
                                <div class="flightList">
                                    <div class="row align-items-center">
                                        <div class="col-lg-auto">
                                            <div class="flight">
                                                <div class="thumb">
                                                    <img src="{{ Storage::url($flight->flight_image) }}" alt="asdfs">
                                                </div>
                                            <h6> {{ $flight->airlines  }}</h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="shortDescription row">
                                                <div class="col">
                                                    <div class="d-flex air">
                                                        <div class="media mr-auto">
                                                            <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                                            <div class="media-body">
                                                                <h5>{{ $flight->depature_city }}</h5>
                                                                <p>{{ $flight->depature_date  }}</p>
                                                            </div>
                                                        </div>
                
                                                        <div class="media">
                                                            <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                                            <div class="media-body">
                                                                <h5>{{ $flight->arival_city  }}</h5>
                                                                <p>{{ $flight->arival_date  }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto time">
                                                    <p>{{ $flight->depature_time  }}</p>

                                                     @if ($flight->transit == 'yes' )
                                                         <p> Stop </p>

                                                        @else

                                                         <p>(Non Stop)</p>

                                                     @endif

                                                </div>
                                            </div>
                                            {{-- <hr>
                                            <div class="shortDescription row">
                                                <div class="col">
                                                    <div class="d-flex air">
                                                        <div class="media mr-auto">
                                                            <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                                            <div class="media-body">
                                                                <h5>{{ $flight->depature_city }}</h5>
                                                                <p>{{ $flight->depature_date  }}</p>
                                                            </div>
                                                        </div>
                
                                                        <div class="media">
                                                            <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                                            <div class="media-body">
                                                                <h5>{{ $flight->arival_city  }}</h5>
                                                                <p>{{ $flight->arival_date  }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto time">
                                                    <p>{{ $flight->depature_time  }}</p>

                                                     @if ($flight->transit == 'yes' )
                                                         <p> Stop </p>

                                                        @else

                                                         <p>(Non Stop)</p>

                                                     @endif

                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            {{-- <s>{{ $flight->airlines  }}</s> --}}
                                            <h3>${{ $flight->ticket_price  }}</h3>
                                            <div class="perRoom">All Incl. per adult</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        


                        <nav aria-label="Page navigation" class="d-flex justify-content-end">
                            {{ $flights->links() }}
                        </nav>


                    </div>
                </div>
            </section>
            <!-- End welcome section  -->
        </div>
    </div>
@endsection

{{-- @section('js')
    <script type="text/javascript">
        localStorage.setItem("queryData", JSON.stringify({!! json_encode($query) !!}));
    </script>
@endsection --}}