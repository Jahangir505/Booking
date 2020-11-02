@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Flight List</span>
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
                                Airlines 
                            </th>
                            <th>
                                departure City
                            </th>
                            <th>
                                Arival City
                            </th>
                            <th>
                                Class
                            </th>

                            <th>
                                Ticket Price
                            </th>

                            <th>
                                departure Date
                            </th>
                            <th>
                                Arival Date
                            </th>
                            <th>
                                departure Time
                            </th>
                            <th>
                                Arival Time
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
                        @foreach($flights as $flight)
                        <tr>
                            <td>
                                {{$flight->airline->name}}
                            </td>

                            <td>
                                {{$flight->departure_city}}      
                            </td> 

                            <td>
                                {{$flight->arival_city}}    
                            </td>

                            <td>
                                {{$flight->class}}   
                            </td>

                            <td>
                                ${{$flight->price->price_per_adult}}   
                            </td>

                            <td>
                                {{$flight->departure_date}}   
                            </td>

                            <td>
                                {{$flight->arival_date}}   
                            </td>

                            <td>
                                {{$flight->departure_time}}   
                            </td>

                            <td>
                                {{$flight->arival_time}}   
                            </td>


                            <td>
                                <a href="{{route('flights.edit', $flight->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('flights.delete', $flight->id)}}" method="POST">
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