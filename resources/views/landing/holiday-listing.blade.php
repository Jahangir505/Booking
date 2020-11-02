@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item"><a href="#">International Holidays  </a> <i class="fas fa-chevron-right"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">Bali - International Holiday Packages</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="titleArea text-left text-light" >
                <h1 class="title">3 Holiday Packages Found</h1>
            </div>

            <section class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="sidebar filterArea">
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
                                <h4 class="mr-auto">Duration</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="duration_1">
                                <label class="custom-control-label" for="duration_1">Up To 3 Nights (2)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="duration_2">
                                <label class="custom-control-label" for="duration_2">4 Nights (4)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="duration_3">
                                <label class="custom-control-label" for="duration_3">5 To 7 Nights (6)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="duration_4">
                                <label class="custom-control-label" for="duration_4">8 To 10 Nights (0)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="duration_5">
                                <label class="custom-control-label" for="duration_5">11 Nights And above (0) </label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Hotels Star Rating</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rating_1">
                                <label class="custom-control-label" for="rating_1">Up To 3 Stars (9) </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rating_2">
                                <label class="custom-control-label" for="rating_2">4 Stars (9)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rating_3">
                                <label class="custom-control-label" for="rating_3">5 Stars (11)</label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Holiday Theme</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="theme_1">
                                <label class="custom-control-label" for="theme_1">Honeymoon (3)  </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="theme_2">
                                <label class="custom-control-label" for="theme_2">Group (9)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="theme_3">
                                <label class="custom-control-label" for="theme_3">Customizable (3) </label>
                            </div>
                        </div>
                        <!-- End filer Box -->

                        <div class="filterBox">
                            <div class="row">
                                <h4 class="mr-auto">Holiday Spot</h4>
                                <a href="">Clear</a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="spot_1">
                                <label class="custom-control-label" for="spot_1">Bali (12) </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="spot_2">
                                <label class="custom-control-label" for="spot_2">Kuala Lumpur (1)</label>
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
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single List -->
                            <div class="singleList">
                                <div class="row">
                                    <div class="col-lg-auto imageArea">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col descriptionArea">
                                                <h4>Super Delight Malaysia with Langkawi(5 Star)</h4>
                                                <div class="place">
                                                    2N Kuala Lumpur | 3N Langkawi
                                                </div>
                                                <p>
                                                    Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.
                                                </p>
                                                <div class="pakageMeta">
                                                    <h5> <i class="fas fa-plane"></i> Package includes roundtrip flights</h5>
                                                    <div class="row">
                                                        <div class="col-auto">Holiday Type: <strong>Family</strong> </div>
                                                        <div class="col-auto start">Starts: <strong>New Delhi</strong></div>
                                                        <div class="col">Duration: <strong>5 Nights/ 6 Days</strong> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto priceArea">
                                                <s>$800</s>
                                                <h3>$500</h3>
                                                <div class="perRoom">per room / night</div>
                                                <a href="" class="btn btn-block btn-orange">Book Now</a>
                                                <a href="" class="link btn-block text-center">View Details</a>
                                            </div>
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
    </div>l
@endsection