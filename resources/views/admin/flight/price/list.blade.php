@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">flightprice Price Lists</span>
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
                                Route 
                            </th>
                            <th>
                               Take Of Date
                            </th>
                            <th>
                                Take Of Time
                            </th>
                            <th>
                               Price Per Adult
                            </th>
                            <th>
                               Price Per Child
                            </th>
                            <th>
                               Price Per Infant
                            </th>
                            <th>
                               Available Seats
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
                        @foreach($flightPrices as $flightprice)
                        <tr>
                            <td>
                                {{$flightprice->route->getRouteName()}}
                            </td>

                            <td>
                                {{$flightprice->take_of_date}}      
                            </td> 

                            <td>
                                {{$flightprice->take_of_time}}    
                            </td>

                            <td>
                                ${{$flightprice->price_per_adult}}   
                            </td>

                            <td>
                                ${{$flightprice->price_per_child}}   
                            </td>

                            <td>
                                ${{$flightprice->price_per_infant}}   
                            </td>

                            <td>
                                {{$flightprice->available_seat}}   
                            </td>

                            <td>
                                <a href="{{route('flightprices.edit', $flightprice->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('flightprices.delete', $flightprice->id)}}" method="POST">
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