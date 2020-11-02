@extends('admin.layout.master')

@section('content')
<div class="row" id="root">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Hotel</span>
                </div>
                
            </div>
            <div class="portlet-body">
                @include('admin.hotels.partials.hotel_form', ['url' => route('hotels.store')])
            </div>
        </div>
    </div>

</div>
@endsection
