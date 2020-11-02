@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Cruise</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('cruises.update', $cruise->id)}}" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" class="form-control" placeholder="Cruise Name" name="name" value="{{$cruise->name}}"/>

                    <div class="form-group">
                        <label>Number Of Rooms In This Cruise</label>
                        <input type="number" class="form-control" placeholder="number of rooms" name="number_of_rooms" value="{{$cruise->number_of_rooms}}">
                    </div>

                    <div class="form-group">
                        <label>Cruise Logo</label>
                        <div class="dropbox" id="dropbox">
                            <input type="file" id="gallery-photo-add"  accept="image/*" name="logo">
                            <span>click here to add logo</span>
                        </div>

                        <div class="gallery">
                            <img src="{{Storage::url($cruise->logo)}}" alt="" style="width: 150px; height: 150px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Cruise Facilities</label>
                        
                        @foreach($cruise->getParseFacility() as $item)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{$item}}" name="facilities[]" value="{{$item}}" checked>
                                <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update Cruise</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection