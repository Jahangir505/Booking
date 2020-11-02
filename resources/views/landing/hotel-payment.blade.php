@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <section class="row mt-5">
                <div class="col-lg-8">
                    <div class="card border-0">
                        <div class="singleList m-0">
                            <div class="row hotelLisst">
                                <div class="col-lg-auto imageArea">
                                    <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col descriptionArea">
                                            <h4>Maecenas interdum <img src="{{asset('assets/landing/images/rating.png')}}" alt=""></h4>
                                            <div class="place">
                                                <i class="fas fa-map-marker-alt"></i> Lorem Ipsum, Washington, D.C.
                                            </div>
                                            <p>Nullam imperdiet diam quis justo condimentum sollicitudin. Cras augue elit, tristique ac aliquet ac, posuere at quam.</p>
                                            <div class="row tools">
                                                <div class="col-auto border-right"><i class="fas fa-wifi"></i> Internet Service</div>
                                                <div class="col-auto border-right"><i class="fas fa-dumbbell"></i> Gym </div>
                                                <div class="col-auto"><i class="fas fa-swimmer"></i> Swimming Pool</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single List -->
                    </div>
                    <!-- End Card  -->

                    <h4 class="subTitle">Room Type: <strong>Superior Room</strong> </h4>

                    <div class="table-responsive">
                        <div class="card">
                            <table class="table m-0 text-center">
                                <thead class="card-header">
                                <tr>
                                    <th class="border-0">Room</th>
                                    <th class="border-0">Guest</th>
                                    <th class="border-0">Price/night</th>
                                    <th class="border-0">Extras</th>
                                    <th class="border-0">Night(s)</th>
                                </tr>
                                </thead>
                                <tbody class="card-body">
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>$100</td>
                                    <td>-</td>
                                    <td>2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

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
                            <div class="row">
                                <div class="col border-right">
                                    <h4>check-in</h4>
                                    <h3> <i class="far fa-calendar-alt"></i> Tue, 14 Oct'14</h3>
                                    <h3> <i class="far fa-clock"></i> 2 Pm</h3>
                                </div>
                                <div class="col">
                                    <h4>check-Out</h4>
                                    <h3> <i class="far fa-calendar-alt"></i> Thu, 16 Oct'14</h3>
                                    <h3> <i class="far fa-clock"></i> 12 Pm</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center border-top pb-2 pt-2">
                            Night(s) 2
                        </div>
                        <div class="card-body fareSummery border-top">
                            <h4>Fare summary (in $)</h4>
                            <div class="d-flex">
                                2 Nights x 100:
                                <span class="ml-auto">$200</span>
                            </div>
                            <div class="d-flex">
                                Tax
                                <span class="ml-auto">$15</span>
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
                            <span class="ml-auto">$215</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End welcome section  -->
        </div>
    </div>
@endsection