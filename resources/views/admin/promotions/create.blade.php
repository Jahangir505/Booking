@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Promotions</span>
                </div>
                
            </div>
            <div class="portlet-body">
                @include('admin.promotions.partials.promotion_form')
            </div>
        </div>
    </div>

</div>
@endsection