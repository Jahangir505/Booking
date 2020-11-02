@extends('admin.layout.master')

@section('content')
<form action="@if($role){{route('roles.update', $role->id)}}@else{{route('roles.store')}}@endif" method="POST">
    @csrf
    @if($role)
         @method('put')
    @endif
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">@if($role) Update @else Add Role @endif</div>
            <div class="panel-body">
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label class="required">Role Name</label>
                            <input class="form-control" type="text" placeholder="Role Name" name="name" value="@if($role){{$role->name}}@endif">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary btn-block btn-lg">@if($role) Update Role @else Save Role @endif</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 permissions">
        <div class="panel panel-default">
            <div class="panel-heading">Permissions</div>
            <div class="panel-body form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">                       
                                    @foreach ($add_perms as $perm)
                                    <li>
                                        <label>
                                            <input class="checkbox" type="checkbox" name="permissions[]" value="{{$perm}}" @if($role && $role->hasPermissionTo($perm)) checked @endif> {{$perm}}                                        
                                        </label>
                                    </li> 
                                    @endforeach                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">                       
                                    @foreach ($edit_perms as $perm)
                                    <li>
                                        <label>
                                            <input class="checkbox" type="checkbox" name="permissions[]" value="{{$perm}}" @if($role && $role->hasPermissionTo($perm)) checked @endif> {{$perm}}                                        
                                        </label>
                                    </li> 
                                    @endforeach                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Remove</div>
                            <div class="panel-body">
                                <ul class="list-unstyled">                       
                                    @foreach ($rem_perms as $perm)
                                    <li>
                                        <label>
                                            <input class="checkbox" type="checkbox" name="permissions[]" value="{{$perm}}" @if($role && $role->hasPermissionTo($perm)) checked @endif/> {{$perm}}                                        
                                        </label>
                                    </li> 
                                    @endforeach                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

{{-- End admin paneel --}}
@endsection

