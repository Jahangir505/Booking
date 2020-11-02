@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Hotel List</span>
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
                                image 
                            </th>
                            <th>
                                name
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                location
                            </th>

                            <th>
                                featured
                            </th>
                            <th>
                                stars
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
                        @foreach($hotels as $hotel)
                        <tr>
                            <td>
                                <img src="@if($hotel) {{ Storage::url($hotel->get_image()) }} @endif" alt="" style="width: 100px; height:100px; @if(!$hotel->get_image()) display: none; @endif">
                            </td>

                            <td>
                                {{$hotel->name}}      
                            </td> 

                            <td>
                                {!! Str::limit($hotel->description, 100) !!}    
                            </td>
                            <td>
                                {{Str::limit($hotel->location, 100)}}   
                            </td>

                            <td>
                                {{$hotel->featured ? 'Yes' : 'No'}}   
                            </td>

                            <td>
                                {{$hotel->stars}}   
                            </td>

                            <td>
                                <a href="{{route('hotels.edit', $hotel->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('hotels.delete', $hotel->id)}}" method="POST">
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