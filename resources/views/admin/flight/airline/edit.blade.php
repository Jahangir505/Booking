@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Route/Transit</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('airlines.update', $airline->id)}}" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" class="form-control" placeholder="Airline Name" name="name" value="{{$airline->name}}">
                    </div>
                    <div class="form-group">
                        <label>Add Images</label>
                        <div class="dropbox" id="dropbox">
                            <input type="file" id="gallery-photo-add" multiple accept="image/*" name="file">
                            <span>click here or drop your files</span>
                        </div>

                        <div class="gallery">
                            <img src="{{Storage::url($airline->image)}}" alt="no image found">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update Airline</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection