@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">StopSale Lists</span>
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
                                Name/Reason for stop selling
                            </th>
                            <th>
                               StopSale Product
                            </th>
                            <th>
                                From Date
                            </th>
                            <th>
                               To Date
                            </th>
                            <th>
                               StopSale For Nationality
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
                        @foreach($stopsales as $stopsale)
                        <tr>
                            <td>
                               {{$stopsale->name}}
                            </td>

                            <td>
                               {{class_basename($stopsale->stopsaleable)}}
                            </td>

                            <td>
                                {{$stopsale->from_date}}      
                            </td> 

                            <td>
                               {{$stopsale->to_date}}
                            </td>

                            <td>
                               {{$stopsale->nationality}}
                            </td>

                            <td>
                                <a href="{{route('stopsale.edit', $stopsale->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('stopsale.delete',$stopsale->id)}}" method="POST">
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