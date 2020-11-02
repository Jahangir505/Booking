@if($hotels)
    @foreach ($hotels as $hotel)
    <div class="singleList">
        <div class="row hotelLisst">
            <div class="col-lg-auto imageArea">
                <img src="@if($hotel) {{Storage::url($hotel->get_image())}} @endif" alt="">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col descriptionArea">
                        <h4>{{$hotel->name}} <img src="{{asset('assets/landing/images/rating.png')}}" alt=""></h4>
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
@endif