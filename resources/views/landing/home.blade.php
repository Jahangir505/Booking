@extends('layouts.app')

@section('content')
    <div class="bannerArea" @if(isset($banner) && $banner->image) style="background: {{asset('assets/landing/banner/banner.jpg')}}" @endif></div>
    <div class="contentWrap">
        <div class="container">
            <div class="tripArea">

                <h2 class=""> @if(isset($banner)) {{$banner->title}} @else Find Your Perfect Trip @endif</h2>

                <!-- List group -->
                <div class="list-group tabList list-group-horizontal "  id="tripList" role="tablist">
                    <a class="list-group-item  @if(!$errors->has('location')) active @endif" data-toggle="list" href="#flight" role="tab"><i class="fas fa-plane"></i> Flight </a>
                    <a class="list-group-item @if($errors->has('location')) active @endif" data-toggle="list" href="#hotel" role="tab"><i class="fas fa-bed"></i> Hotel </a>
                    <a class="list-group-item" data-toggle="list" href="#holiday" role="tab"><i class="fas fa-tree"></i> Holiday </a>
                    <a class="list-group-item" data-toggle="list" href="#bus" role="tab"><i class="fas fa-bus"></i> Bus</a>
                    <a class="list-group-item" data-toggle="list" href="#car" role="tab"><i class="fas fa-car"></i> Car</a>
                    <a class="list-group-item" data-toggle="list" href="#rail" role="tab"><i class="fas fa-subway"></i> Rail</a>
                </div>

                <!-- Tab panes -->
                <div class="tab-content " >
                    <div class="tab-pane @if(!$errors->has('location')) active @endif" id="flight" role="tabpanel">
                        <div class="innerTabPanel">
                            <h4>Book Domestic & International Flight Tickets </h4>
                            {{-- <flight-searchform action-route="{{route("flightlisting")}}"></flight-searchform> --}}
                            <form action="{{route('flightlisting')}}"   method="GET" autocomplete="off">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Depart From</label>
                                        <input type="text" class="form-control @if($errors->has('departure_city')) is-invalid @endif" name="departure_city" placeholder="Departure City">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>To</label>
                                        <input type="text" class="form-control @if($errors->has('arival_city')) is-invalid @endif" name="arival_city" placeholder="Going To">
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Departure Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control datepicker @if($errors->has('departure_date')) is-invalid @endif" placeholder="2019/12/31" name="departure_date"  data-date-format="yyyy-mm-dd" > 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Returning</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                    <input type="text" placeholder="2019/12/31" name="return_date"  data-date-format="yyyy-mm-dd" class="form-control datepicker"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Adults</label>
                                                <div class="input-group">
                                                    <select name="adult"  class="form-control custom-select" :class="errors.includes('adult') && !form.adult ? 'is-invalid' : ''" v-model="form.adult">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Children</label>
                                                <div class="input-group">
                                                    <select name="children"  class="form-control custom-select" v-model="form.children">
                                                        <option value="0">Select Children</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>infants</label>
                                                <div class="input-group">
                                                    <select name="infants"  class="form-control custom-select" v-model="form.infants">
                                                        <option value="0">Select Infants</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Class</label>
                                                <div class="input-group">
                                                    <select name="travelClass"  class="form-control custom-select @if($errors->has('travelClass')) is-invalid @endif">
                                                        <option value="">Select Class</option>
                                                        <option value="ECONOMY">Economy</option>
                                                        <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                                        <option value="BUSINESS">Business</option>
                                                        <option value="FIRST">First</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>&nbsp;</label>
                                                <button class="btn btn-block btn-tvl" id="search-flight">Search Flight</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane @if($errors->has('location')) active @endif" id="hotel" role="tabpanel">
                        <div class="innerTabPanel">
                            <h4>BOOK HOTEL ROOMS </h4>
                            <form action="{{route('hotellisting')}}" method="GET">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>I WANT TO GO</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control @if($errors->has('location')) is-invalid @endif" placeholder="E.g New York" name="location">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CHECK - IN</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control datepicker @if($errors->has('check_in')) is-invalid @endif" placeholder="30/12/2019" name="check_in">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>CHECK - OUT</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control datepicker @if($errors->has('check_out')) is-invalid @endif" placeholder="31/12/2019" name="check_out">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ADULT</label>
                                                <div class="input-group">
                                                    <select name="adults"  class="form-control custom-select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>CHILD</label>
                                                <div class="input-group">
                                                    <select name="children"  class="form-control custom-select">
                                                        <option value="0">0</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-tvl">Search Hotels</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="holiday" role="tabpanel">
                        <div class="innerTabPanel">
                            <h4>BOOK HOLIDAY PACKAGES</h4>
                            <form action="" method="POST" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>I WANT TO GO</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>STARTING FROM</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>DURATION(OPTIONAL)</label>
                                        <div class="input-group">
                                            <select class="form-control custom-select">
                                                <option >1 Day</option>
                                                <option >2 Days</option>
                                                <option >3 Days</option>
                                                <option >4 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PACKAGE TYPE(OPTIONAL)</label>
                                        <div class="input-group">
                                            <select class="form-control custom-select">
                                                <option >Group</option>
                                                <option >1 </option>
                                                <option >2 </option>
                                                <option >3 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>BUDGET(OPTIONAL)</label>
                                        <div class="input-group">
                                            <select class="form-control custom-select">
                                                <option >500</option>
                                                <option >1000</option>
                                                <option >5000+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-tvl">Search Packages</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="bus" role="tabpanel">
                        <div class="innerTabPanel">
                            <h4>BSEARCH PERFECT BUS</h4>
                            <form action="" method="POST" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>PICK UP LOCATION</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>DROP OFF LOCATION</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PICK UP DATE</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PICK OFF DATE</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-tvl">Search BUs</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="car" role="tabpanel">
                        <div class="innerTabPanel">
                            <h4>BSEARCH PERFECT CAR</h4>
                            <form action="" method="POST" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>PICK UP LOCATION</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>DROP OFF LOCATION</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PICK UP DATE</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PICK OFF DATE</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>CAR BRNAD(OPTIONAL)</label>
                                        <div class="input-group">
                                            <select class="form-control custom-select">
                                                <option>BMW</option>
                                                <option>Audi</option>
                                                <option>Mercedes</option>
                                                <option>Suzuki</option>
                                                <option>Honda</option>
                                                <option>Hyundai</option>
                                                <option>Toyota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>CAR TYPE(OPTIONAL)</label>
                                        <div class="input-group">
                                            <select class="form-control custom-select">
                                                <option >Lemo</option>
                                                <option >Sedan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-tvl">Search Cars</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="rail" role="tabpanel">
                        <div class="innerTabPanel">
                            <h4>BSEARCH PERFECT RAIL</h4>
                            <form action="" method="POST" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>PICK UP LOCATION</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>DROP OFF LOCATION</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="E.g New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PICK UP DATE</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>PICK OFF DATE</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" placeholder="31/12/2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>ADULT</label>
                                        <div class="input-group">
                                            <select name=""  class="form-control custom-select">
                                                <option value="">Select</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Persons</label>
                                        <div class="input-group">

                                            <select name=""  class="form-control custom-select">
                                                <option value="">Select</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-tvl">Search Rail</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Trip Area -->

            <section class="welcomeArea">
                <div class="titleArea " >
                    <h1 class="title">Welcome</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. ?</p>
                </div>
                <div class="productServices " >
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <div class="card-body">
                                    <h5>No Hassle with Travel Agent</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam culpa deserunt, minus quasi explicabo qui temporibus ab alias. Accusamus magnam nobis fugiat obcaecati neque quos autem ipsa inventore reiciendis ut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="icon"><i class="fas fa-warehouse"></i></div>
                                <div class="card-body">
                                    <h5>100% Live Inventory</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam culpa deserunt, minus quasi explicabo qui temporibus ab alias. Accusamus magnam nobis fugiat obcaecati neque quos autem ipsa inventore reiciendis ut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="icon"><i class="far fa-money-bill-alt"></i></div>
                                <div class="card-body">
                                    <h5>Secure Payment</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam culpa deserunt, minus quasi explicabo qui temporibus ab alias. Accusamus magnam nobis fugiat obcaecati neque quos autem ipsa inventore reiciendis ut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End welcome section  -->

            <section class="packages mt-4">
                <div class="titleArea " >
                    <h2 class="title">Most Popular packages</h2>
                </div>
                <div class="row packagesWrap " >
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                    <div class="col-lg-3 col-md-4 col-sm-6 " >
                        <div class="singlePackges">
                            <div class="PackgeThumb">
                                <img src="{{asset('assets/landing/images/pakage.png')}}"  alt="...">
                            </div>
                            <div class="card-body  ">
                                <h3>Paris and Bordeaux</h3>
                                <div class="meta">
                                    <span class="date"> <i class="far fa-calendar-alt"></i> No of days: 5 </span>
                                    <span class="view"> <i class="fas fa-user"></i> pepple: 4 </span>
                                </div>
                            </div>
                            <div class="card-bottom d-flex">
                                <div class="prize mr-auto"> $150</div>
                                <a href="#" class="view-card ">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pakage -->
                </div>
            </section>

            <section class="row mt-5 mb-5 " >
                <div class="col-lg-6 aboutList">
                    <div class="titleArea text-left " >
                        <h2>About us</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel lectus at purus consectetur pulvinar. Sed venenatis dapibus magna, vel mattis arcu auctor id. Nulla blandit tempus lacus at consectetur.
                    </p>
                    <p class="mt-4">
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ex felis, aliquet nec rhoncus egestas, feugiat eu lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae augue quam. Vestibulum pellentesque erat sit amet purus vestibulum congue.
                    </p>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Cras convallis sem pretium, fringilla leo quis, ornare leo.
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Donec nec ex accumsan, fermentum eros tempus, ultricies massa.
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            Proin porta odio id dui efficitur egestas.
                        </li>
                    </ul>
                    <a href="#" class="btn btn-tvl">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="titleArea text-left">
                        <h2>Gallery</h2>
                    </div>
                    <div class="galleryArea " >
                        <div class="arrowSection">
                            <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <div id="gallery" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="glry">
                                                <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                                <div class="overlay">
                                                    <h5>Rome City Tour</h5>
                                                    <p>03 Sep 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
