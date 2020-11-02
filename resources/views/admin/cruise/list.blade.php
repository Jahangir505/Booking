@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Cruises</span>
                </div>
                <div class="actions">
                    <a class="btn btn-primary" href="{{route('airlines.create')}}">Add</a>
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
                                Cruise Logo
                            </th>
                            <th>
                               Cruise Name
                            </th>
                            <th>
                              Number Of Rooms
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
                        @foreach($cruises as $cruise)
                        <tr>
                            <td>
                                <img src="{{Storage::url($cruise->logo)}}" alt="" class="img-responsive" style="width: 85px;">
                            </td>
                            <td>
                                {{$cruise->name}}      
                            </td> 
                            <td>
                                {{$cruise->number_of_rooms}}      
                            </td> 
                            <td>
                                <a href="{{route('cruises.edit', $cruise->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('cruises.destroy', $cruise->id)}}" method="POST">
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