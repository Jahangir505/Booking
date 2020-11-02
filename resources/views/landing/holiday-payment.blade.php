@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <h1 class="subTitle mt-5">Review Package Details </h1>
            <section class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            Inclusions
                        </div>
                        <div class="card-body">
                            <h4>Special title treatment</h4>
                            <p>With supporting text below as a natural lead-in to additional content. <img src="{{asset('assets/landing/images/rating.png')}}" alt=""></p>

                            <h4>Flight</h4>
                            <div class="flightList mb-5">
                                <div class="row align-items-center">
                                    <div class="col-md-auto">
                                        <div class="flight">
                                            <div class="thumb">
                                                <img src="{{asset('assets/landing/images/flight.png')}}" alt="">
                                            </div>
                                            <h6>Jet Airways</h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="shortDescription row">
                                            <div class="col">
                                                <div class="d-flex air">
                                                    <div class="media mr-auto">
                                                        <img src="{{asset('assets/landing/images/airForm.png')}}" alt="">
                                                        <div class="media-body">
                                                            <h5>New York</h5>
                                                            <p>09 Oct, 23:00</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <img src="{{asset('assets/landing/images/airTo.png')}}" alt="">
                                                        <div class="media-body">
                                                            <h5>New York</h5>
                                                            <p>09 Oct, 23:00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto time">
                                                <p>5hr 50min </p>
                                                <p>(Non Stop)</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="shortDescription row">
                                            <div class="col">
                                                <div class="d-flex air">
                                                    <div class="media mr-auto">
                                                        <img src="{{asset('assets/landing/images/airForm.png')}}" alt="">
                                                        <div class="media-body">
                                                            <h5>New York</h5>
                                                            <p>09 Oct, 23:00</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <img src="{{asset('assets/landing/images/airTo.png')}}" alt="">
                                                        <div class="media-body">
                                                            <h5>New York</h5>
                                                            <p>09 Oct, 23:00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto time">
                                                <p>5hr 50min </p>
                                                <p>(Non Stop)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4>Other Inclusions</h4>
                            <ul>
                                <li>Round trip economy-class airfare valid for the duration of the tour</li>
                                <li>Breakfast</li>
                                <li>4 nights accommodation in double/twin bedded rooms in hotels. 2 nights Kuta, 2 nights Nusa Dua</li>
                                <li>Return airport transfers in an air-conditioned vehicle on private basis.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Card  -->

                    <h4 class="subTitle">Passengers Details  </h4>
                    <div class="card">
                        <div class="card-header"> Primary Passenger Detail</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 mb-4">
                                    <label for="">Sex</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="male" name="sex" class="custom-control-input">
                                                <label class="custom-control-label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="female" name="sex" class="custom-control-input">
                                                <label class="custom-control-label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Surname</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Age</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12">
                                            <label for="">Mobile Number </label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card  -->

                    <h4 class="subTitle">Your Card Information</h4>
                    <div class="card">
                        <div class="card-header">Fill Card Detail</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Card Type</label>
                                        <select name="" id="" class="custom-select form-control">
                                            <option value="">Select Card Type</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Card holder name</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Card number</label>
                                        <input type="email" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">CVC</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Valid Thru</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-orange btn-block">Proceed Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card  -->
                </div>


                <div class="col-lg-4">
                    <div class="card bookingSummery">
                        <div class="card-body">
                            <h6>Super Cool Bali with Kuala Lumpur </h6>
                            <p class="gray mb-3">4 Nights & 5 Days</p>

                            <h4>From</h4>
                            <h3>New York on 01 Jan 15</h3>

                            <h4 class="mt-3">Category</h4>
                            <h3>Standard</h3>
                        </div>
                        <div class="card-body fareSummery border-top">
                            <h4>Fare summary (in $)</h4>
                            <div class="d-flex">
                                2 Adult(s) (twin sharing ) X 310
                                <span class="ml-auto">$620</span>
                            </div>
                            <div class="d-flex">
                                Departure Discount
                                <span class="ml-auto">$28</span>
                            </div>
                            <div class="d-flex">
                                Special Online Discount
                                <span class="ml-auto">$10</span>
                            </div>
                            <div class="d-flex">
                                Tax
                                <span class="ml-auto">$5</span>
                            </div>
                            <div class="d-flex">
                                Discount Coupon
                                <div class="ml-auto">
                                    <div class="d-flex coupon">
                                        <input type="text" class="form-control">
                                        <button class="btn btn-orange">Apply</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-white d-flex">
                            Total Amount
                            <span class="ml-auto">$587</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End welcome section  -->

        </div>
    </div>
@endsection