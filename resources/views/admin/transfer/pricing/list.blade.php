@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">transferPricings Cars</span>
                </div>
                <div class="actions">
                    <form method="POST" class="form-inline" action="{{route('search.users')}}">
                        {{csrf_field()}}
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <button class="btn btn-outline btn-circle btn-sm green" type="submit"> <i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="portlet-body">

                <table class="table table-striped table-bordered table-hover order-column">
                    <thead>
                        <tr>
                            <th>
                               VehicleType
                            </th>
                            <th>
                                Country
                            </th>
                            <th>
                               Rate Zone
                            </th>
                            <th>
                                Rate Per
                            </th>
                            <th>
                               Currency
                            </th>
                            <th>
                               Starting Price
                            </th>
                            <th>
                                Rate unit
                            </th>
                            <th>
                               Price for every unit 
                            </th>
                            <th>
                               Nationality
                            </th>
                            <th>
                               Edit
                            </th>
                            <th>
                               Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transferPricings as $transferPricing)
                        <tr>
                            <td>
                                {{$transferPricing->transfer->car_type}}
                            </td>
                            <td>
                                {{$transferPricing->country}}
                            </td>
                            <td>
                                {{$transferPricing->rate_zone}}
                            </td>
                            <td>
                                {{$transferPricing->rate_per}}
                            </td>
                            <td>
                                {{$transferPricing->currency}}
                            </td>
                            <td>
                                {{$transferPricing->start_cost}}
                            </td>
                            <td>
                                {{$transferPricing->price_per}}
                            </td>
                            <td>
                                {{$transferPricing->price}}
                            </td>
                            <td>
                                {{$transferPricing->nationality}}
                            </td>

                            <td>
                                <a href="{{route('pricings.edit', $transferPricing->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('pricings.delete', $transferPricing->id)}}" method="POST">
                                    {{csrf_field()}}
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach 
                    <tbody>
                </table>
           
        </div>
      
      </div><!-- row -->
      </div>
    </div>
  </div>    
</div>
@endsection