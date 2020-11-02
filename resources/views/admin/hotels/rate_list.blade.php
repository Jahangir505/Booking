@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Rate Lists</span>
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
                               price
                            </th>
                            <th>
                                From Date
                            </th>
                            <th>
                               To Date
                            </th>
                            <th>
                                Nationality
                            </th>

                            <th>
                                is Availablle
                            </th>
                            <th>
                                Room Id
                            </th>
                            <th>
                                Hotel Id
                            </th>
                            <th>
                                edit
                            </th>
                            <th>
                                delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates as $rate)
                        <tr>
                            <td>
                               $ {{$rate->price}}
                            </td>

                            <td>
                                {{$rate->from_date}}      
                            </td> 

                            <td>
                               {{$rate->to_date}}
                            </td>
                            <td>
                               {{$rate->nationality}}
                            </td>

                            <td>
                                {{$rate->is_available ? 'Yes' : 'No'}}
                            </td>

                            <td>
                                {{$rate->room ? $rate->room->id : null}}   
                            </td>

                            <td>
                                {{$rate->hotel ? $rate->hotel->id : null}}   
                            </td>

                            <td>
                                <a href="{{route('rates.edit', $rate->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('rates.delete', $rate->id)}}" method="POST">
                                    {{csrf_field()}}
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> </button>
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