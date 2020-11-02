@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <section class="row mt-5">
                <div class="col-lg-8">
                    <h1 class="subTitle">Passengers Detail </h1>
                    <div class="card">
                        <div class="card-header"> Passenger 1</div>
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

                    <div class="card">
                        <div class="card-header"> Passenger 2</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 mb-4">
                                    <label for="">Sex</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="male2" name="sex2" class="custom-control-input">
                                                <label class="custom-control-label" for="male2">Male</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="female2" name="sex2" class="custom-control-input">
                                                <label class="custom-control-label" for="female2">Female</label>
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


                    <div class="card flightAccess">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <form action="" method="post">
                                        <h5>Continue, as a guest user </h5>
                                        <div class="form-group">
                                            <input type="text" placeholder="Email Address" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-orange btn-block">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    <div class="or"> <span>or</span></div>
                                </div>
                                <div class="col-md-5">
                                    <form action="" method="post">
                                        <h5>Login</h5>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email Address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="w-100 mb-3 d-flex align-items-center">
                                            <button type="submit" class="btn btn-orange pl-4 pr-4">Login</button>
                                            <a href="" class="link ml-3">Forgot password?</a>
                                        </div>
                                    </form>
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
                        <div class="card-header">
                            Review Flight Details
                        </div>
                        <div class="card-body">
                            <h4>New York - Singapore</h4>
                            <div class="flightListSidebar">
                                <div class="row align-items-center">
                                    <div class="col-md-12"> <h6>Economy</h6></div>
                                    <div class="col-xl-auto">
                                        <div class="flight">
                                            <div class="thumb">
                                                <img src="{{asset('assets/landing/images/flight.png')}}" alt="">
                                            </div>
                                            <h6>Airlines, UA 804
                                                Boeing 777 </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5>New York</h5>
                                                <p> 09 Oct, 23:00</p>
                                            </div>
                                            <div class="col text-center">
                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                <h6>Non-stop, 14h </h6>
                                            </div>
                                            <div class="col text-right">
                                                <h5>Singapore</h5>
                                                <p>10 Oct, 07:20 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flightChange">
                                    <div class="row">
                                        <div class="col-auto">
                                            <i class="fas fa-plane"></i> Change of Planes
                                        </div>
                                        <div class="col">
                                            <i class="far fa-clock"></i>  Connection Time: 2h 30m
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12"> <h6>Economy</h6></div>
                                    <div class="col-xl-auto">
                                        <div class="flight">
                                            <div class="thumb">
                                                <img src="{{asset('assets/landing/images/flight.png')}}" alt="">
                                            </div>
                                            <h6>Airlines, UA 804
                                                Boeing 777 </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5>New York</h5>
                                                <p> 09 Oct, 23:00</p>
                                            </div>
                                            <div class="col text-center">
                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                <h6>Non-stop, 14h </h6>
                                            </div>
                                            <div class="col text-right">
                                                <h5>Singapore</h5>
                                                <p>10 Oct, 07:20 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End list  -->

                            <h4>Singapore - New York</h4>
                            <div class="flightListSidebar">
                                <div class="row align-items-center">
                                    <div class="col-md-12"> <h6>Economy</h6></div>
                                    <div class="col-lg-auto">
                                        <div class="flight">
                                            <div class="thumb">
                                                <img src="{{asset('assets/landing/images/flight.png')}}" alt="">
                                            </div>
                                            <h6>Airlines, UA 804
                                                Boeing 777 </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5>New York</h5>
                                                <p> 09 Oct, 23:00</p>
                                            </div>
                                            <div class="col text-center">
                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                <h6>Non-stop, 14h </h6>
                                            </div>
                                            <div class="col text-right">
                                                <h5>Singapore</h5>
                                                <p>10 Oct, 07:20 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flightChange">
                                    <div class="row">
                                        <div class="col-auto">
                                            <i class="fas fa-plane"></i> Change of Planes
                                        </div>
                                        <div class="col">
                                            <i class="far fa-clock"></i>  Connection Time: 2h 30m
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12"> <h6>Economy</h6></div>
                                    <div class="col-lg-auto">
                                        <div class="flight">
                                            <div class="thumb">
                                                <img src="{{asset('assets/landing/images/flight.png')}}" alt="">
                                            </div>
                                            <h6>Airlines, UA 804
                                                Boeing 777 </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5>New York</h5>
                                                <p> 09 Oct, 23:00</p>
                                            </div>
                                            <div class="col text-center">
                                                <img src="{{asset('assets/landing/images/arrow-left.png')}}" alt="">
                                                <h6>Non-stop, 14h </h6>
                                            </div>
                                            <div class="col text-right">
                                                <h5>Singapore</h5>
                                                <p>10 Oct, 07:20 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End list  -->
                        </div>

                        <div class="card-body pt-0 fareSummery">
                            <h4>Fare summary (in $)</h4>
                            <div class="d-flex">
                                2 Passengers
                                <span class="ml-auto">$258</span>
                            </div>
                            <div class="d-flex">
                                Fee & Surcharge
                                <span class="ml-auto">$28</span>
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
                            <span class="ml-auto">$286</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End welcome section  -->

        </div>
    </div>
@endsection