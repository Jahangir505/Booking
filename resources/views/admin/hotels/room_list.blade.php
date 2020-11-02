@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Room List</span>
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
                                Image
                            </th>
                            <th>
                                Room Type
                            </th>
                            <th>
                                Hotel
                            </th>
                            <th>
                                available
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Status
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
                        @foreach($rooms as $room)
                        <tr>
                            <td>
                                <img src="@if($room) {{ Storage::url($room->get_image()) }} @endif" alt="" style="width: 100px; height:100px; @if(!$room->get_image()) display: none; @endif">
                            </td>

                            <td>
                                {{$room->room_type}}      
                            </td> 

                            <td>
                                {{$room->hotel->name}}    
                            </td>

                            <td>
                                {{$room->available_room}}
                            </td>
                            <td>
                                {{$room->price}}
                            </td>

                            <td>
                                {{$room->status}}   
                            </td>

                            <td>
                                <a href="{{route('rooms.edit', $room->id)}}" class="btn btn-outline btn-circle btn-sm green">
                                    <i class="fa fa-eye"></i> View 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('rooms.delete', $room->id)}}" method="POST">
                                    {{csrf_field()}}
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
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