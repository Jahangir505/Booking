@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="col-md-6">
                        <div class="caption">
                            <i class="icon-list font-blue"></i>
                            <span class="caption-subject font-green bold uppercase">Stuff Management</span>

                            <a class="btn btn-primary btn-md pull-right" href="{{route('admins.create')}}">
                                <i class="fa fa-plus"></i>   ADD NEW
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        @foreach($admins as $admin)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{$admin->name}}
                                </td>
                                <td>{{$admin->username}}</td>
                                <td>{{$admin->email}}</td>
                                <td>
                                    @if($admin->hasRole('superadmin'))
                                        <p class="btn green btn-outline sbold uppercase btn-xs"> SUPER ADMIN </p>
                                    @else
                                        <p class="btn green btn-outline sbold uppercase btn-xs"> {{$admin->roles->first()->name}} </p>
                                    @endif
                                </td>
                                <td>
                                    @if($admin->hasRole('superadmin'))
                                        <p class="btn red btn-outline sbold uppercase btn-xs"> You can't edit super admin </p>
                                    @else 
                                        @if(Auth::guard('admin')->user()->can('edit staffs'))
                                            <a href="{{route('admins.edit', $admin->id)}}" class="btn btn-primary">Edit</a>
                                        @else 
                                            <p class="btn red btn-outline sbold uppercase btn-xs"> You don't have permission </p>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

