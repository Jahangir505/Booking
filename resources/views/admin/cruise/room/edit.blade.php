@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Update Cruise Room</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('cruises.rooms.update', $cruiseRoom->id)}}" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Room Types</label>
                        <select name="type" class="form-control">
                            <option value="inside" @if($cruiseRoom->type == 'inside') selected @endif>Inside</option>
                            <option value="outside" @if($cruiseRoom->type == 'outside') selected @endif>OutSide</option>
                            <option value="balcony" @if($cruiseRoom->type == 'balcony') selected @endif>Balcony</option>
                            <option value="suit" @if($cruiseRoom->type == 'suit') selected @endif>Suit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Cruises</label>
                        <select name="cruise_id" class="form-control">
                           @foreach ($cruises as $cruise)
                                <option value="{{$cruise->id}}" @if($cruise->id == $cruiseRoom->cruise->id) selected @endif>{{$cruise->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Room Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Room Price Per night" value="{{$cruiseRoom->price}}">
                    </div>

                    <div class="form-group">
                        <label>Cruise Room Images</label>
                        <div class="dropbox" id="dropbox">
                            <input type="file" id="gallery-photo-add"  accept="image/*" name="roomImages[]" multiple>
                            <span>click here to add room images</span>
                        </div>

                        <div class="gallery">
                        </div>

                        <div class="existed-gallery">
                            @foreach($cruiseRoom->images as $image)
                                <div class="prev">
                                    <img src="{{Storage::url($image->image)}}" alt="">
                                    <button class="removeFS" data-url="{{route('gallery.delete', $image->id)}}" data-token="{{csrf_token()}}">X</button>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Cruise Room Facilities</label>
                        @foreach($cruiseRoom->getParseFacility() as $item)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{$item}}" name="facilities[]" value="{{$item}}" checked>
                                <label class="custom-control-label" for="{{$item}}">{{$item}}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Save Cruise Room</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection