<div class="singleList">
    <div class="flightList">
        <div class="row align-items-center">
            <div class="col-lg-auto">
                <div class="flight">
                    <div class="thumb">
                        @if($flight->airline->image)
                            <img src="{{ Storage::url($flight->airline->image) }}" alt="asdfs">
                        @else
                            <img src="{{ asset('/assets/landing/images/flight.png') }}" alt="asdfs">
                        @endif
                    </div>
                    <h6>{{$flight->airline->name}}</h6>
                </div>
            </div>
            <div class="col">
                 {{-- if this flight has a one stops then this template will render --}}
                @if($flight->hasStops() && count($flight->stops) == 1)
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->departure_city}}</h5>
                                        <p>{{$flight->departure_date}}, {{ $flight->departure_time}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[0]->place}}</h5>
                                        <p>{{$flight->stops[0]->arival_date}}, {{ $flight->stops[0]->ArivalTime()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->DepartureDateTime(), $flight->stops[0]->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                    <hr />
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[0]->place}}</h5>
                                        <p>{{$flight->stops[0]->departure_date}}, {{ $flight->stops[0]->departureTime()}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->arival_city}}</h5>
                                        <p>{{$flight->arival_date}}, {{ $flight->arival_time}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->stops[0]->DepartureDateTime(), $flight->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                @endif
                {{-- if flight has two stops  --}}
                @if($flight->hasStops() && count($flight->stops) == 2)
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->departure_city}}</h5>
                                        <p>{{$flight->departure_date}}, {{ $flight->departure_time}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[0]->place}}</h5>
                                        <p>{{$flight->stops[0]->arival_date}}, {{ $flight->stops[0]->ArivalTime()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->DepartureDateTime(), $flight->stops[0]->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                    <hr />
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[0]->place}}</h5>
                                        <p>{{$flight->stops[0]->departure_date}}, {{ $flight->stops[0]->departureTime()}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[1]->place}}</h5>
                                        <p>{{$flight->stops[1]->arival_date}}, {{ $flight->stops[1]->ArivalTime()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->stops[0]->DepartureDateTime(), $flight->stops[1]->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                    <hr>
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[1]->place}}</h5>
                                        <p>{{$flight->stops[1]->departure_date}}, {{ $flight->stops[1]->departureTime()}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->arival_city}}</h5>
                                        <p>{{$flight->arival_date}}, {{ $flight->arival_time}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->stops[1]->DepartureDateTime(), $flight->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                @endif
                
                {{-- if flight has 3 stops  --}}
                @if($flight->hasStops() && count($flight->stops) == 3)
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->departure_city}}</h5>
                                        <p>{{$flight->departure_date}}, {{ $flight->departure_time}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[0]->place}}</h5>
                                        <p>{{$flight->stops[0]->arival_date}}, {{ $flight->stops[0]->ArivalTime()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->DepartureDateTime(), $flight->stops[0]->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                    <hr />
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[0]->place}}</h5>
                                        <p>{{$flight->stops[0]->departure_date}}, {{ $flight->stops[0]->departureTime()}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[1]->place}}</h5>
                                        <p>{{$flight->stops[1]->arival_date}}, {{ $flight->stops[1]->ArivalTime()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->stops[0]->DepartureDateTime(), $flight->stops[1]->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                    <hr>
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[1]->place}}</h5>
                                        <p>{{$flight->stops[1]->departure_date}}, {{ $flight->stops[1]->DepartureTime()}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[2]->place}}</h5>
                                        <p>{{$flight->stops[2]->arival_date}}, {{ $flight->stops[2]->ArivalTime()}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->stops[1]->DepartureDateTime(), $flight->stops[2]->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                    <hr>
                    <div class="shortDescription row">
                        <div class="col">
                            <div class="d-flex air">
                                <div class="media mr-auto">
                                    <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->stops[2]->place}}</h5>
                                        <p>{{$flight->stops[2]->departure_date}}, {{ $flight->stops[2]->departureTime()}}</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                    <div class="media-body">
                                        <h5>{{$flight->arival_city}}</h5>
                                        <p>{{$flight->arival_date}}, {{ $flight->arival_time}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto time">
                            <p>{{$flight->getDuration($flight->stops[2]->DepartureDateTime(), $flight->ArivalDateTime())}}</p>
                            <p>(Non Stop)</p>
                        </div>
                    </div>
                @endif
                {{-- if flight has not any stops  --}}
                @if(!$flight->hasStops() && count($flight->stops) == 0)
                <div class="shortDescription row">
                    <div class="col">
                        <div class="d-flex air">
                            <div class="media mr-auto">
                                <img src="{{ asset('/assets/landing/images/airForm.png') }}" alt="">
                                <div class="media-body">
                                    <h5>{{$flight->departure_city}}</h5>
                                    <p>{{$flight->departure_date}}, {{ $flight->departure_time}}</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="{{ asset('/assets/landing/images/airTo.png') }}" alt="">
                                <div class="media-body">
                                    <h5>{{$flight->arival_city}}</h5>
                                    <p>{{$flight->arival_date}}, {{ $flight->arival_time}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto time">
                        <p>{{$flight->get_duration()}}</p>
                        <p>(Non Stop)</p>
                    </div>
                </div>
            @endif
            </div>
            <div class="col-xl-auto priceArea">
                <s>$400</s>
                <h3>${{$flight->price->price_per_adult}}</h3>
                <div class="perRoom">All Incl. per adult</div>
                <a href="" class="btn btn-block btn-orange">Book Now</a>
            </div>
        </div>
    </div>
</div>
