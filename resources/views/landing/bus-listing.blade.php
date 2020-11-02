@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item"><a href="#">United States  </a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">New York to Washington</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="titleArea text-left text-light" >
                <h1 class="title">New York To Washington, DC</h1>
            </div>

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
                                <h4 class="mr-auto">Time</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="time_1">
                                <label class="custom-control-label" for="time_1">5AM - 11AM 11AM - 6PM</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="time_2">
                                <label class="custom-control-label" for="time_2">11AM - 6PM</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="time_3">
                                <label class="custom-control-label" for="time_3">6PM - 10PM</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="time_4">
                                <label class="custom-control-label" for="time_4">10PM - 5AM</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Boarding Point</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="boarding_1">
                                <label class="custom-control-label" for="boarding_1">Lorem </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="boarding_2">
                                <label class="custom-control-label" for="boarding_2">Ipsum dolar</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="boarding_3">
                                <label class="custom-control-label" for="boarding_3">Site amite </label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Dropping Point </h4>
                                <a href="">Clear</a>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="dropping_1">
                                <label class="custom-control-label" for="dropping_1">Dropping 1</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="dropping_2">
                                <label class="custom-control-label" for="dropping_2">Dropping 2</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="dropping_3">
                                <label class="custom-control-label" for="dropping_3">Dropping 3</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Bus Type</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="sleeper">
                                <label class="custom-control-label" for="sleeper">Sleeper</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ac">
                                <label class="custom-control-label" for="ac">AC</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="non-ac">
                                <label class="custom-control-label" for="non-ac">Non-AC</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="volvo">
                                <label class="custom-control-label" for="volvo">Volvo</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="mercedes">
                                <label class="custom-control-label" for="mercedes">Mercedes</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Other">
                                <label class="custom-control-label" for="Other">Other</label>
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

                        <div class="listingInwrap">
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="bustList">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="shortDescription">
                                                <div class="row">
                                                    <div class="col place">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>21:00</h5>
                                                                <p>Boarding Points </p>
                                                            </div>
                                                            <div class="col text-center">
                                                                <h6>5hr 40min</h6>
                                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <h5>05:45</h5>
                                                                <p>Dropping Points </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-auto travelName">
                                                        <div class="row">
                                                            <div class="col ">
                                                                <h5>National Travels</h5>
                                                                <p>A/C Sleeper (2+1) </p>
                                                            </div>
                                                            <div class="col-auto text-center">
                                                                <button class="btn btn-orange">6</button>
                                                                <p class="orcl">Seat Left</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto priceArea">
                                            <h3>$310</h3>
                                            <div class="perRoom">All Incl. per Person</div>
                                            <a href="" class="btn btn-block btn-orange">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single List -->

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