@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Cruise mealplans</span>
                </div>
                <div class="actions">
                    <a class="btn btn-primary" href="{{route('mealplans.create')}}">Add</a>
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
                              Meal For Cruise and Date
                            </th>
                            <th>
                             Food
                            </th>
                            <th>
                               Meal Type
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
                        @foreach($meals as $meal)
                        <tr>
                            <td>
                                {{$meal->mealplan->cruise->name}} ({{$meal->mealplan->date}})   
                            </td> 
                            <td>
                                {{$meal->food->name}}      
                            </td> 
                            <td>
                                {{$meal->type}}      
                            </td> 
                            <td>
                                <a href="{{route('meals.edit', $meal->id)}}" class="btn green">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                            </td>
                            <td>
                                <form action="{{route('meals.destroy', $meal->id)}}" method="POST">
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