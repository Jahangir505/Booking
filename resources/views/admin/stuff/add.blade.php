@extends('admin.layout.master')

@section('content')
<form action="@if($admin){{route('admins.update', $admin->id)}}@else{{route('admins.store')}}@endif" method="POST">
    @csrf
    @if($admin)
        @method('put')
    @endif
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">@if($admin) Update Admin @else Add Admin @endif</div>
            <div class="panel-body">
                <div class="panel-body">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">First Name</label>
                            <input class="form-control" type="text" placeholder="First name" name="firstname" value="@if($admin) {{$admin->firstname}} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Last Name</label>
                            <input class="form-control" type="text" placeholder="Last name" name="lastname" value="@if($admin) {{$admin->lastname}} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Status</label>
                            <select name="status" class="form-control select2">
                                <option value="1" @if($admin && $admin->status) selected @endif>Active</option>
                                <option value="0" @if($admin && !$admin->status) selected @endif>Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Email</label>
                            <input class="form-control" type="email" placeholder="Email address" name="email" value="@if($admin) {{$admin->email}} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">username</label>
                            <input class="form-control" type="username" placeholder="Username" name="username" @if($admin) {{$admin->username}} @endif>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Password</label>
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Mobile Number</label>
                            <input class="form-control" type="text" placeholder="Mobile Number" name="phone" value="@if($admin) {{$admin->phone}} @endif">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Country</label>
                            <select class="form-control select2" name="country" id="" tabindex="">
                                <option value="">Please Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country}}" @if($admin && $admin->country == $country) selected @endif>{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="required">Role</label>
                            <select class="form-control select2" name="role">
                                <option value="">Please Select A Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->name}}" @if($admin && $admin->hasRole($role->name)) selected @endif>{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary btn-block btn-lg">@if($admin) Update @else Save @endif</button>
            </div>
        </div>
    </div>
    
</div>
</form>

@endsection

