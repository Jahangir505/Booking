@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Travel Home </a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item"><a href="#">International Holiday Packages</a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item"><a href="#">Bali Packages </a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">Super Cool Bali with Kuala Lumpur</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="card hotelSchedule">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 border-right">
                            <h2>{{$hotel->location}}</h2>
                            {{-- <p>United States, </p> --}}
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Check in</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                        <input type="text" class="form-control datepicker" placeholder="30/12/2019" value="@if(isset($query)) {{$query['check_in']}} @endif">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Check Out</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                        <input type="text" class="form-control datepicker" placeholder="30/12/2019" value="@if(isset($query)) {{$query['check_out']}} @endif">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="row">
                                <div class="col">
                                    <label>Rooms</label>
                                    <div class="input-group">
                                        <select name="" class="form-control custom-select" id="">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>People</label>
                                    <div class="input-group">
                                        <select name="" class="form-control custom-select" id="">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Nights</label>
                                    <div class="input-group">
                                        <select name="" class="form-control custom-select" id="">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top  Date  Area  -->

            <section class="row">
                <div class="col-lg-7">
                    <div class="productSlide">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                {{-- <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li> --}}
                                @foreach ($hotel->images as $item)
                                    <li>
                                        <img src="{{Storage::url($item->image)}}" />
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider slideThumb">
                            <ul class="slides">
                                @foreach ($hotel->images as $item)
                                    <li>
                                        <img src="{{Storage::url($item->image)}}" />
                                    </li>
                                @endforeach
                                {{-- <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" />
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- End details Slider -->
                </div>

                <div class="col-lg-5">
                    <div class="productShortDescription">
                        <h1 class="light">{{$hotel->name}}</h1>
                        <p class="gray mb-3"> <i class="fas fa-map-marker-alt"></i> {{$hotel->address}}</p>
                        {{-- <div class="row meta">
                            <div class="col-auto"> <i class="fas fa-envelope"></i> Hotel E-mail</div>
                            <div class="col-auto"> <i class="fas fa-paperclip"></i> Hotel Website</div>
                            <div class="col gray"> <i class="fas fa-phone-volume"></i> +1 0987654321</div>
                        </div> --}}
                        <div class="tools">
                            <i class="fas fa-wifi"></i>
                            <i class="fas fa-dumbbell"></i>
                            <i class="fas fa-swimmer"></i>
                        </div>
                        <div class="wonderful">
                            <h3>Wonderful!</h3>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col border-right">
                                            <h5>97% </h5>
                                            <p> of guests recommend </p>
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            <h5>4/5 </h5>
                                            <p> guest rating</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Wonderfull -->
                        <p class="addReview">Based on 21 reviews <a href="">+Add review</a></p>

                        <div class="row priceWrap">
                            <div class="col-12">
                                <p class="mb-0">Sub Total</p>
                            </div>
                            <div class="col-xl-7">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h3>$ @if($hotel->rooms->first()) {{$hotel->rooms->first()->price}} @endif</h3>
                                    </div>
                                    <div class="col-6 p-0">
                                        <p>for 1 Room {{$numberOfNights}} Nights Inclusive of all Taxes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <a href="" class="btn btn-lg btn-block btn-orange">Select Room</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Product slider Wrap -->

            <section class="productDetailsWrap">
                <div class="row">
                    <div class="col-x-9 col-lg-8">
                        <div class="productDetailsTab">
                            <div class="list-group list-group-horizontal">
                                <a class="list-group-item active"  href="#"> Available Rooms </a>
                                <a class="list-group-item" href="#"> Hotel Information </a>
                                <a class="list-group-item" href="#"> Location </a>
                                <a class="list-group-item" href="#"> Hotel Reviews (20) </a>
                            </div>
                        </div>
                        <!-- End product Details Tab -->

                        <div class="selectRoom" id="">
                            <h3 class="productDetailstitle">Select your room </h3>
                            @foreach ($hotel->rooms as $room)
                                <div class="singleList">
                                    <div class="row roomList">
                                        <div class="col-lg-auto imageArea">
                                            {{-- <img src="{{asset('assets/landing/images/pakage.png')}}" alt=""> --}}
                                            <img src="{{Storage::url($room->get_image())}}" alt="">
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col descriptionArea">
                                                    <h4>Includes Free Breakfast</h4>
                                                    <div class="place">
                                                        Max Occupancy: {{$room->max_adults}} adults
                                                    </div>
                                                    <div class="row tools">
                                                        
                                                        <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                        <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                        <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                    </div>
                                                    <ul class="mb-0">
                                                        <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                        <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-auto priceArea">
                                                    <p class="m-0">Form</p>
                                                    <h3>${{$room->price}}</h3>
                                                    <div class="perRoom mb-2">per room / night</div>
                                                    <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                    <p class="text-center orcl mt-2 mb-0"> {{$room->available_room}} left </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Single List -->
                            {{-- <div class="singleList">
                                <div class="row roomList">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Includes Free Breakfast</h4>
                                                <div class="place">
                                                    Max Occupancy: 2 adults
                                                </div>
                                                <div class="row tools">
                                                    <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                    <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                    <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                </div>
                                                <ul class="mb-0">
                                                    <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                    <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <p class="m-0">Form</p>
                                                <h3>$500</h3>
                                                <div class="perRoom mb-2">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <p class="text-center orcl mt-2 mb-0"> 2 left </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row roomList">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Includes Free Breakfast</h4>
                                                <div class="place">
                                                    Max Occupancy: 2 adults
                                                </div>
                                                <div class="row tools">
                                                    <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                    <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                    <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                </div>
                                                <ul class="mb-0">
                                                    <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                    <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <p class="m-0">Form</p>
                                                <h3>$500</h3>
                                                <div class="perRoom mb-2">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <p class="text-center orcl mt-2 mb-0"> 2 left </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row roomList">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Includes Free Breakfast</h4>
                                                <div class="place">
                                                    Max Occupancy: 2 adults
                                                </div>
                                                <div class="row tools">
                                                    <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                    <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                    <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                </div>
                                                <ul class="mb-0">
                                                    <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                    <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <p class="m-0">Form</p>
                                                <h3>$500</h3>
                                                <div class="perRoom mb-2">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <p class="text-center orcl mt-2 mb-0"> 2 left </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row roomList">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Includes Free Breakfast</h4>
                                                <div class="place">
                                                    Max Occupancy: 2 adults
                                                </div>
                                                <div class="row tools">
                                                    <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                    <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                    <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                </div>
                                                <ul class="mb-0">
                                                    <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                    <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <p class="m-0">Form</p>
                                                <h3>$500</h3>
                                                <div class="perRoom mb-2">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <p class="text-center orcl mt-2 mb-0"> 2 left </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row roomList">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Includes Free Breakfast</h4>
                                                <div class="place">
                                                    Max Occupancy: 2 adults
                                                </div>
                                                <div class="row tools">
                                                    <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                    <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                    <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                </div>
                                                <ul class="mb-0">
                                                    <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                    <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <p class="m-0">Form</p>
                                                <h3>$500</h3>
                                                <div class="perRoom mb-2">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <p class="text-center orcl mt-2 mb-0"> 2 left </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row roomList">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Includes Free Breakfast</h4>
                                                <div class="place">
                                                    Max Occupancy: 2 adults
                                                </div>
                                                <div class="row tools">
                                                    <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                    <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                    <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                                </div>
                                                <ul class="mb-0">
                                                    <li> <i class="fas fa-check"></i> FREE Cancellation </li>
                                                    <li> <i class="fas fa-check"></i> Pay at hotel or pay today</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <p class="m-0">Form</p>
                                                <h3>$500</h3>
                                                <div class="perRoom mb-2">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <p class="text-center orcl mt-2 mb-0"> 2 left </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Single List -->

                        </div>
                        <!-- End Select Your Room  -->

                        <div class="hotelInformationWrap">
                            <h3 class="productDetailstitle mt-4">Hotel Information</h3>
                            <div class="card hotelInformation">
                                <div class="card-body">
                                    <ul>
                                        @foreach ($hotel->getFacilities() as $item)
                                            <li> <i class="fas fa-check"></i> {{$item}}</li>
                                        @endforeach

                                        {{-- <li> <i class="fas fa-check"></i> Power Backup </li>
                                        <li> <i class="fas fa-check"></i> Laundry Service Available </li>
                                        <li> <i class="fas fa-check"></i> Housekeeping </li>
                                        <li> <i class="fas fa-check"></i> Medical Assistance Available </li>
                                        <li> <i class="fas fa-check"></i> Parking Facilities Available</li>
                                        <li> <i class="fas fa-check"></i> Power Backup </li>
                                        <li> <i class="fas fa-check"></i> Laundry Service Available </li>
                                        <li> <i class="fas fa-check"></i> Housekeeping </li>
                                        <li> <i class="fas fa-check"></i> Medical Assistance Available </li>
                                        <li> <i class="fas fa-check"></i> Parking Facilities Available</li>
                                        <li> <i class="fas fa-check"></i> Power Backup </li>
                                        <li> <i class="fas fa-check"></i> Laundry Service Available </li>
                                        <li> <i class="fas fa-check"></i> Housekeeping </li>
                                        <li> <i class="fas fa-check"></i> Medical Assistance Available </li> --}}

                                    </ul>
                                </div>
                            </div>

                            <div class="card hotelPolice">
                                <div class="card-body">
                                    <h3 class="subTitle">Hotel Policies</h3>

                                    <dl>
                                        <dt>Check In/out:</dt>
                                        <dd> Hotel Check-in Time is 12 PM, Check-out Time is 12 PM.</dd>
                                    </dl>

                                    <dl>
                                        <dt>Cancellation Policy:</dt>
                                        <dd> Cancellation and prepayment policies vary according to room type. Please check the Fare policy associated with your room.</dd>
                                    </dl>

                                    <dl>
                                        <dt>Extra Bed:</dt>
                                        <dd>The inclusion of 'extra bed' with a booking is facilitated with a folding cot or a mattress as an extra bed.</dd>
                                    </dl>

                                    <dl>
                                        <dt>Payment Mode:</dt>
                                        <dd>You can pay now or you can pay at the hotel when you check-in if your selected hotel or room type has this option.</dd>
                                    </dl>

                                </div>
                            </div>
                        </div>
                        <!-- Hotel Information  -->

                        <div class="location">
                            <h3 class="productDetailstitle mt-4">Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7119263355!2d-0.38178406930702025!3d51.52873519756608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1576230667437!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                        <div class="reviewWrap" id="">
                            <h3 class="productDetailstitle">Hotel Reviews </h3>
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                            <div class="card reviewList">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="avater">
                                                <div class="thumb">
                                                    <i class="fas fa-user"></i>
                                                    <!-- <img src="{{asset('assets/landing/images/banner.jpg')}}" alt=""> -->
                                                </div>
                                                <h5>User name</h5>
                                                <h6>Address </h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>Delightful Experience  <img src="{{asset('assets/landing/images/rating.png')}}" alt=""> <span class="rating">4.0/5</span></h3>
                                            <div class="date">Posted Oct 02, 2014</div>
                                            <p>The hotel was in a great location with friendly staff. The rooms were well maintained and the breakfast was a great start to our day. and food was awesome. The rooms are cosy & comfortable with a dece ... </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End review list  -->
                        </div>
                        <!-- End Review Section -->

                        <div class="commentArea" id="">
                            <h3 class="productDetailstitle">Write a Review</h3>
                            <div class="card comment">
                                <div class="card-body">
                                    <div class="form" methode="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Review Title </label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rating </label> <br>
                                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Review Text </label>
                                                    <textarea rows="8" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4 offset-md-8">
                                                <button type="submit" class="btn btn-block btn-orange">Submit Your Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Additional Info -->
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="productSidebar">
                            <h4>You May Also Like</h4>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>
                            <div class="media">
                                <div class="thumb">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Hotel Walnut </a></h5>
                                    <div class="price"> <span>$36-$160</span> per night</div>
                                    <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection