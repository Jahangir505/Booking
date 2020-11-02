@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <h1 class="subTitle mt-5">Passengers Details </h1>
            <section class="row">
                <div class="col-lg-8">
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
                                    <div class="row seat">
                                        <div class="col-auto border-right">
                                            <h6>Seat</h6>
                                            <p>S15</p>
                                        </div>
                                        <div class="col">
                                            <h6>Seat type</h6>
                                            <p>SELEPER</p>
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
                            <h6 class="mb-3">National Travel </h6>
                            <div class="row">
                                <div class="col border-right">
                                    <h4>From</h4>
                                    <h3>New York</h3>
                                </div>
                                <div class="col">
                                    <h4>To</h4>
                                    <h3>Washington, DC</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body fareSummery border-top">
                            <h4>Fare summary (in $)</h4>
                            <div class="d-flex">
                                Bus Fare:
                                <span class="ml-auto">$100</span>
                            </div>
                            <div class="d-flex">
                                PG charges
                                <span class="ml-auto">$0</span>
                            </div>
                            <div class="d-flex">
                                Tax
                                <span class="ml-auto">$2</span>
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
                            <span class="ml-auto">$102</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End welcome section  -->

        </div>
    </div>
@endsection