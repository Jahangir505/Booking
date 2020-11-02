@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Travel Home </a> <i class="fas fa-chevron-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">International Holiday Packages</a> <i
                                class="fas fa-chevron-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Bali Packages </a> <i class="fas fa-chevron-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Super Cool Bali with Kuala Lumpur</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <section class="row">
                <div class="col-lg-7">
                    <div class="productSlide">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider slideThumb">
                            <ul class="slides">
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                                <li>
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End details Slider -->
                </div>

                <div class="col-lg-5">
                    <div class="productShortDescription">
                        <h1 class="light">Super Cool Bali with Kuala Lumpur </h1>
                        <p class="gray mb-3">3 Nights Kuala Lumpur</p>
                        <div class="row priceWrap">
                            <div class="col-sm-6 border-right">
                                <s>$800</s>
                                <h3>$500</h3>
                                <p>(price per person on twin sharing)</p>
                            </div>
                            <div class="col-sm-6 pl-4">
                                <a href="" class="btn btn-lg btn-dark btn-block">Send Query</a>
                                <a href="" class="btn btn-lg btn-block btn-orange">Book Now</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6>Package Summary</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>Starting City: <strong>New York</strong></li>
                                            <li>Duration: <strong>3 Nights / 4 Days</strong></li>
                                            <li>Tour Plan: <strong>3N Kuala Lumpur</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>Starting City: <strong>New York</strong></li>
                                            <li>Duration: <strong>3 Nights / 4 Days</strong></li>
                                            <li>Tour Plan: <strong>3N Kuala Lumpur</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package summary -->

                        <div class="card assistance">
                            <div class="card-body">
                                <h3><i class="fas fa-phone-volume"></i> Need Assistance?</h3>
                                <p>Our team is 24/7 at your service to help you with your booking issues or answer any
                                    related questions</p>
                                <a href="">1-889-765-4670</a>
                            </div>
                        </div>
                        <!-- package summary -->

                    </div>
                </div>
            </section>
            <!-- End Product slider Wrap -->

            <section class="productDetailsWrap">
                <div class="row">
                    <div class="col-xl-9 col-lg-8"
                    ">
                    <div class="productDetailsTab">
                        <div class="list-group list-group-horizontal">
                            <a class="list-group-item active" href=""> Inclusions </a>
                            <a class="list-group-item" href=""> Itinerary </a>
                            <a class="list-group-item" href=""> Additional Info </a>
                        </div>
                    </div>
                    <!-- End product Details Tab -->

                    <div class="inclusive" id="inclusions">
                        <h3 class="productDetailstitle">Inclusions </h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Hotel</h4>
                                        <ul>
                                            <li>Stay in Kuala Lumpur for 2 nights and Bali for 4 nights</li>
                                            <li>Stay in 3 star hotels</li>
                                        </ul>

                                        <h4>Transport</h4>
                                        <ul>
                                            <li>Includes return trip flight from New Delhi to Bali</li>
                                            <li>Include airport transfers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Other Inclusions</h4>
                                        <ul>
                                            <li> Round trip economy-class airfare</li>
                                            <li>Breakfast</li>
                                            <li>Visa for Malaysia</li>
                                            <li>Half-day city tour of Kuala Lumpur</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="packageItinerary" id="itinerary">
                        <h3 class="productDetailstitle">Bali Package Itinerary </h3>
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->
                        <div class="card itineraryList">
                            <div class="card-header">
                                <span>Day 1:</span> Arrival in Kuala Lumpur | Day at Leisure
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="hotelName">
                                            <div class="thumb">
                                                <i class="fas fa-bed"></i>
                                            </div>
                                            <div class="name">
                                                <h6>Plaza Hotel</h6>
                                                <img src="{{asset('assets/landing/images/rating.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="hotelImage">
                                                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae sint id consectetur maiores atque
                                                    assumenda, enim excepturi eum.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit
                                                    minima consequuntur quae eum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End package itinerary -->

                    </div>
                    <!-- End package Itinerary -->

                    <div class="additionalInfo" id="addInfo">
                        <h3 class="productDetailstitle">Additional Info</h3>
                        <div class="card">
                            <div class="card-body">
                                <h4>Visa Details</h4>
                                <ul>
                                    <li>Visa is on arrival at USD 35</li>
                                </ul>

                                <h4>Terms & Conditions</h4>
                                <ul>
                                    <li>Nullam maximus nunc id mi auctor scelerisque.</li>
                                    <li>Suspendisse semper ex ac nisi tristique, in placerat est congue.</li>
                                    <li>Quisque eu quam sit amet neque sollicitudin congue.</li>
                                    <li>Phasellus rhoncus massa eget diam porta, a vestibulum mauris ultrices.</li>
                                    <li>Nunc volutpat eros in diam sollicitudin, vel elementum libero elementum.</li>
                                </ul>

                                <h4>Cancellation Policy</h4>
                                <ul>
                                    <li>Donec et est vitae sem interdum laoreet sit amet in tortor.</li>
                                    <li>Proin posuere tortor eu mauris condimentum, quis rhoncus nibh interdum.</li>
                                    <li>Sed sagittis felis vel sapien lacinia ultricies.</li>
                                    <li>Proin faucibus elit in finibus malesuada.</li>
                                    <li>Suspendisse mollis risus vitae est dapibus, non interdum lectus scelerisque.
                                    </li>
                                    <li>Aenean vel leo eleifend nisl ornare vestibulum vitae ac urna.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Additional Info -->
                </div>
                <div class="col-xl-3 col-lg-4"
                ">
                <div class="productSidebar">
                    <h4>You May Also Like</h4>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="thumb">
                            <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                        </div>
                        <div class="media-body">
                            <h5><a href="">Super Cool Bali </a></h5>
                            <p>5 Days/4 Nights</p>
                            <div class="price"><span>$36-$160</span> per Adult</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection