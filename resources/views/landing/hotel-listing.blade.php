@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item"><a href="#">United States  </a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">New York</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="titleArea text-left text-light" >
                <h1 class="title">@if($hotels) {{count($hotels)}} @endif Hotels Available in {{request()->input('location')}}</h1>
            </div>

            <section class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="filterArea">
                        <div class="filterBox">
                            <div class="row align-items-center">
                                <h3 class="mr-auto">Filter Your Search</h3>
                                <a href="#" onclick="resetAll(event)">Reset All</a>
                                <span class=" d-block d-md-none d-xl-none d-lg-none close hideSidebar"><i class="far fa-times-circle"></i></span>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Price</h4>
                                <a href="#" onclick="clearFilter(event, 'price')">Clear</a>
                            </div>
                            <div class="rangerSliderArea">
                                <input type="range" class="js-range-slider" id="formControlRange" name="price">
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Star Rating</h4>
                                <a href="#" onclick="clearFilter(event, 'stars')">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="star_5" name="star[]" value="5">
                                <label class="custom-control-label" for="star_5">5 star (200)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="star_4" name="star[]" value="4">
                                <label class="custom-control-label" for="star_4">4 star (150)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="star_3" name="star[]" value="3">
                                <label class="custom-control-label" for="star_3">3 star (80)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="star_2" name="star[]" value="2">
                                <label class="custom-control-label" for="star_2" >2 star (70)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="star_1" name="star[]" value="1">
                                <label class="custom-control-label" for="star_1">1 star (50)</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Hotel Name</h4>
                                <a href="#" onclick="clearFilter(event, 'hotel_name')">Clear</a>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Eg: redison" class="form-control" name="hotel_name">
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Hotel Location </h4>
                                <a href="#" onclick="clearFilter(event, 'locations')">Clear</a>
                            </div>

                            @if($locations)
                                @foreach ($locations as $key => $value)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="location{{$key}}" name="location[]" value="{{$value}}">
                                        <label class="custom-control-label" for="location{{$key}}"> {{$value}} </label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Hotel Facility</h4>
                                <a href="#" onclick="clearFilter(event, 'facilities')">Clear</a>
                            </div>
                            @foreach ($facilities as $facility)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{$facility->name}}" name="facilities[]" value="{{$facility->name}}">
                                    <label class="custom-control-label" for="{{$facility->name}}">{{$facility->name}}</label>
                                </div>
                            @endforeach
{{--                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="parking" name="facilities[]" value="parking">
                                <label class="custom-control-label" for="parking">Parking </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="airport_shuttle" name="facilities[]" value="airport shuttle">
                                <label class="custom-control-label" for="airport_shuttlec">Airport Shuttle </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="fitness_center" name="facilities[]" value="fitness center">
                                <label class="custom-control-label" for="fitness_center">Fitness Center</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="non_smoking_rooms" name="facilities[]" value="non smoking rooms">
                                <label class="custom-control-label" for="non_smoking_rooms">Non-Smoking Rooms </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="indoor_pool" name="facilities[]" value="indoor pool">
                                <label class="custom-control-label" for="indoor_pool">Indoor Pool </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="spa" name="facilities[]" value="spa">
                                <label class="custom-control-label" for="spa">Spa </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="family_rooms" name="facilities[]" value="family rooms">
                                <label class="custom-control-label" for="family_rooms">Family Rooms </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="pet_friendly" name="facilities[]" value="pet friendly">
                                <label class="custom-control-label" for="pet_friendly">Pet Friendly </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="restaurant" name="facilities[]" value="restaurant">
                                <label class="custom-control-label" for="restaurant">Restaurant </label>
                            </div>
                            --}}
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

                        <div class="listingInwrap">
                            
                            @foreach ($hotels as $hotel)
                                <div class="singleList">
                                    <div class="row hotelLisst">
                                        <div class="col-lg-auto imageArea">
                                            <img src="@if($hotel) {{Storage::url($hotel->get_image())}} @endif" alt="">
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col descriptionArea">
                                                    <h4>{!! $hotel->name !!} <img src="{{asset('assets/landing/images/rating.png')}}" alt=""></h4>
                                                    <div class="place">
                                                        <i class="fas fa-map-marker-alt"></i> {!! $hotel->address !!}
                                                    </div>
                                                    <p>{!! $hotel->description !!}</p>
                                                    <div class="row tools">
                                                        <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                        <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                        <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto priceArea">
                                                    <p class="m-0">Form</p>
                                                    <h3>$ @if($hotel->rooms->first()) {{$hotel->rooms->first()->price}} @endif</h3>
                                                    <div class="perRoom mb-2">per room / night</div>
                                                    <a href="{{route('hoteldetail', $hotel->id)}}" class="btn btn-block btn-orange">Book Now</a>
                                                    <p class="text-center lastbooking mt-2"> Last Booking: 1 hour ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script>
        var existing_filter = {!! json_encode(request()->all()) !!}
        var stars = [];
        var locations = [];
        var facilities = [];
        var options = {
            params: {
                ...existing_filter
            }
        };

        $(document).ready(function(){
            //filter by stars *
            $("input[name='star[]']").change(function(){
                if(filterByStars(this)) {
                    options.params.stars = filterByStars(this);
                } else {
                    delete options.params.stars;
                }
                getData(options);

            });

            //filter by locations
            $("input[name='location[]']").change(function(){
                if(filterByLocations(this)) {
                    options.params.locations = filterByLocations(this);
                } else {
                    delete options.params.locations;
                }
                getData(options);
            });

            //filter by metas
            $("input[name='facilities[]']").change(function(){
                if(filterByFacilities(this)) {
                    options.params.facilities = filterByFacilities(this);
                } else {
                    delete options.params.facilities;
                }
                getData(options);
            });


            //filter by hotel name
            $("input[name='hotel_name']").on("input", function(){
                if($(this).val()) {
                    options.params.hotel_name = $(this).val();
                } else if (!$(this).val()) {
                    delete options.params.hotel_name;
                }
                getData(options);
            });

            $(".js-range-slider").ionRangeSlider({
                min:0,
                max: 100000,
                from: 0,
                to: 100000,
                grid: false,
                prefix: "$",
                onFinish: function(data) {
                    console.log(data.from);
                    
                    if(data.from) {
                        options.params.price = data.from;
                    } else if (data.from <= 10) {
                        delete options.params.price;
                    }
                    getData(options);
                }
	        });

        });

        function getData(options) {
            //showing loader when filtering works
            showLoader();
            axios.get("{{route('filter.hotels')}}", options)
            .then(resp => {
                $(".listingInwrap").html(resp.data);
            })
            .catch(err => console.log(err.response));
        }


        function filterByStars(self) {
            //user can filter by multiple stars value like 5,3,2,1
            if (self.checked) {
                stars.push($(self).val());
            } else if(!self.checked) {
                stars = stars.filter(val => $(self).val() !== val);
            }

            if (stars.length > 0) {
                return stars;
            }

            return false;
        }
        
        function filterByLocations(self) {
            //user can filter by multiple locations value like dhaka, delhi
            if (self.checked) {
                locations.push($(self).val());
            } else if(!self.checked) {
                locations = locations.filter(val => $(self).val() !== val);
            }

            if (locations.length > 0) {
                return locations;
            }

            return false;
        }

        function filterByFacilities(self) {
            //user can filter by multiple meta
            if (self.checked) {
                facilities.push($(self).val());
            } else if(!self.checked) {
                facilities = facilities.filter(val => $(self).val() !== val);
            }

            if (facilities.length > 0) {
                return facilities
            }

            return false;
        }

        function showLoader() {
            $(".listingInWrap").html(
                `<div id="loader" class="load-full-screen">
                    <div class="loading-animation">
                        <span><i class="fa fa-plane"></i></span>
                        <span><i class="fa fa-bed"></i></span>
                        <span><i class="fa fa-ship"></i></span>
                        <span><i class="fa fa-suitcase"></i></span>
                    </div>
                </div>`
            );
        }

        function clearFilter(e, name) {
            e.preventDefault();
            //clearing filter
            if(options.params[name]) {
                delete options.params[name];
                getData(options);
            }
            

            //clearing stars filter
            if(name.startsWith('star')){
                $(`input[name="star[]"]:checked`).prop('checked', false);
            }

            //clearing stars filter
            if(name.startsWith('facilities')){
                $(`input[name="facilities[]"]:checked`).prop('checked', false);
            }

            //clearing location filter
            if(name.startsWith('location')){
                $(`input[name="location[]"]:checked`).prop('checked', false);
            }

            if(name == 'hotel_name') {
                $(`input[name="hotel_name"]`).val('');
            }

            if(name == 'price') {
                $(`input[name="price"]`).data('ionRangeSlider').reset();
            }


        }

        function resetAll(e) {
            e.preventDefault()
            options.params = {...existing_filter};
            getData(options);

            $(`input[name="star[]"]:checked`).prop('checked', false);
            $(`input[name="facilities[]"]:checked`).prop('checked', false);
            $(`input[name="location[]"]:checked`).prop('checked', false);
            $(`input[name="hotel_name"]`).val('');
            $(`input[name="price"]`).data('ionRangeSlider').reset();
        }

    
    </script>
@endsection