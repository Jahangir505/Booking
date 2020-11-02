@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a> <i class="fas fa-chevron-right"></i> </li>
                    @if(!empty($query))
                        {{-- <li class="breadcrumb-item"><a href="#">{{$query['departure_city']}}</a> <i class="fas fa-chevron-right"></i> </li>  --}}
                        <li class="breadcrumb-item"><a href="#">{{$query['departure_city']}} </a> <i class="fas fa-chevron-right"></i> </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$query['arival_city']}}</li>
                    @endif
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="titleArea text-left text-light" >
                @if(!empty($query))
                    <h3 class="title">Flights from {{$query['departure_city']}} to {{$query['arival_city']}} on {{$query['departure_date']}} for {{$query['adult']}} adult </h3>
                @endif
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
                                <a href="" id="resetAll">Reset All</a>
                                <span class=" d-block d-md-none d-xl-none d-lg-none close hideSidebar"><i class="far fa-times-circle"></i></span>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Price</h4>
                            </div>
                            <div class="rangerSliderArea">
                                <input type="text" class="js-range-slider" name="my_range" />
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Stops</h4>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="non_stop" name="stops" value="0">
                                <label class="custom-control-label" for="non_stop">Non-stop</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="1_stop" name="stops" value="1">
                                <label class="custom-control-label" for="1_stop">1 Stop</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="more_stops" name="stops" value="2">
                                <label class="custom-control-label" for="more_stops">2+ Stops</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Flight Class</h4>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="economy" value="economy" name="travelClass">
                                <label class="custom-control-label" for="economy">Economy</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="business" value="business" name="travelClass">
                                <label class="custom-control-label" for="business">Business</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="first" value="first" name="travelClass">
                                <label class="custom-control-label" for="first">First</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Airlines </h4>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="go_business" name="airline" value="Go">
                                <label class="custom-control-label" for="go_business">Go Business</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="jet_airways" value="jet Airways" name="airline">
                                <label class="custom-control-label" for="jet_airways">Jet Airways</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="air_india" value="air india" name="airline">
                                <label class="custom-control-label" for="air_india">Air India</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="go_air" value="Go Air" name="airline">
                                <label class="custom-control-label" for="go_air">Go Air</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="indigo" value="Indigo" name="airline">
                                <label class="custom-control-label" for="indigo">IndiGo</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Departure Time</h4>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="morning" name="departure" value="6:00 am,11:59 pm">
                                <label class="custom-control-label" for="morning">Morning (6:00am - 11:59pm) </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="afternoon" name="departure" value="12:00 pm,5:59 pm">
                                <label class="custom-control-label" for="afternoon">Afternoon (12:00pm - 5:59pm)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="evening" name="departure" value="6:00 pm,11:59 pm">
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
                        <div class="flight-list-container">
                            @foreach ($flights as $flight)
                                @include('landing.partials.flight_list')
                            @endforeach
                        </div>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo; Prev</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">Next &raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <!-- End welcome section  -->
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    localStorage.setItem("queryData", JSON.stringify({!! json_encode($query) !!}));
    var d = {!! json_encode($query) !!}
    var url = "{{route('filter.flights')}}";

    $(document).ready(function(){
        let queryParams = {...d};

        //price sliding
        $(".js-range-slider").ionRangeSlider({
            type: 'double',
            min:10,
            max: 1000,
            from: 10,
            to: 1000,
            grid: false,
            prefix: "$",
            onFinish: function(data) {
                if(data.from >= 10) {
                    queryParams.priceFrom = data.from;
                }
                
                if (data.to <= 1000) {
                    queryParams.priceTo = data.to;
                }
                applyFilter();
            }
        });

        $("input[name='departure']").change(function(){
            const time = this.value.split(',');
            const time1 = moment.utc(queryParams.departure_date+' '+time[0], 'YYYY-MM-DD hh:mm a').toISOString();
            const time2 = moment.utc(queryParams.departure_date+' '+time[1], 'YYYY-MM-DD hh:mm a').toISOString();

            queryParams.departure_from = time1;
            queryParams.departure_to = time2;

            if (this.checked == false) {
                delete queryParams.departure_from;
                delete queryParams.departure_to;
            }
            applyFilter();
        });

        $("input[name='stops']").change(function(){
            queryParams.stops = this.value;
            if(this.checked == false) {
                delete queryParams.stops;
            }
            applyFilter();
        });

        $("input[name='travelClass']").change(function(){
            queryParams.travelClass = this.value;
            if(this.checked == false) {
                queryParams.travelClass = 'economy';
            }
            applyFilter();
        });

        $("input[name='airline']").change(function(){
            queryParams.airline = this.value;
            if(this.checked == false) {
                delete queryParams.airline;
            }
            applyFilter();
        });

        $("#resetAll").click(function(e){
            e.preventDefault();
            $(`input[name="my_range"]`).data('ionRangeSlider').reset();
            $('input:checkbox').not(this).prop('checked', false);
            queryParams = {...d};
            applyFilter();
        })

        function applyFilter() {
            
            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    ...queryParams
                },

                success: function(data) {
                    $(".flight-list-container").html(data);
                },

                error: function(error) {
                    console.log(error);
                }
            });
        }
            
    });
        
</script>
@endsection