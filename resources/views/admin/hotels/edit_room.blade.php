@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Hotel Rooms</span>
                </div>
                
            </div>
            <div class="portlet-body">
                @include('admin.hotels.partials.room_form', ['url' => route('rooms.update', $room->id), 'method' => 'PUT'])
                {{-- <form action="{{route('rooms.update', $room->id)}}"  method="POST" class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Room Description</label>
                            <textarea class="form-control @if($errors->has('description')) has-error @endif" name="description" rows="10">@if($room) {{$room->description}} @endif</textarea>
                        </div>
    
                        <div class="form-group">
                            <label>Room Price</label>
                            <input  class="form-control @if($errors->has('price')) has-error @endif" name="price" type="number" placeholder="room price" value=@if($room) {{$room->price}} @endif/>
                        </div>
    
    
                        <div class="form-group">
                            <label>Room Type</label>
                            <select name="room_type" class="form-control" selected="@if($room) {{$room->room_type}} @endif">
                                <option value="single" selected>Single</option>
                                <option value="double">Double</option>
                                <option value="tripple">Triple</option>
                                <option value="quad">Quad</option>
                                <option value="queen">Queen</option>
                                <option value="king">King</option>
                                <option value="twin">Twin</option>
                                <option value="hollywood_twin_room">Hollywood Twin Room</option>
                                <option value="double_double">Double-Double</option>
                                <option value="studio">Studio</option>
                                <option value="suit">Suite / Executive Suite</option>
                                <option value="mini_suit">Mini Suite or Junior Suite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Room Status</label>
                            <select name="status" class="form-control" selected="@if($room) {{$room->status}} @endif">
                                <option value="enabled">Enabled</option>
                                <option value="disabled" selected>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hotel</label>
                            <select name="hotel_id" class="form-control" selected="@if($room) {{$room->hotel_id}} @endif">
                                @foreach ($hotels as $hotel)
                                    <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity" placeholder="Quantity" value=@if($room) {{$room->quantity}} @endif>
                        </div>
                        <div class="form-group">
                            <label>Min Stay</label>
                            <input type="number" class="form-control" name="min_stay" placeholder="Min Stay" value=@if($room) {{$room->min_stay}} @endif>
                        </div>
                        <div class="form-group">
                            <label>Max Adults</label>
                            <input  class="form-control @if($errors->has('max_adults')) has-error @endif" name="max_adults" type="number" placeholder="Max Adults" value=@if($room) {{$room->max_adults}} @endif />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Max Child</label>
                            <input  class="form-control @if($errors->has('max_children')) has-error @endif" name="max_children" type="number" placeholder="Max Child" value=@if($room) {{$room->max_children}} @endif/>
                        </div>
                        <div class="form-group">
                            <label>Number Of Extra Beds</label>
                            <input  class="form-control @if($errors->has('no_of_extra_beds')) has-error @endif" name="no_of_extra_beds" type="number" placeholder="extra beds" value=@if($room) {{$room->no_of_extra_beds}} @endif/>
                        </div>
                        <div class="form-group">
                            <label>Extra Bed Charges</label>
                            <input  class="form-control @if($errors->has('extra_bed_charge')) has-error @endif" name="extra_bed_charge" type="number" placeholder="extra bed charges" value=@if($room) {{$room->extra_bed_charge}} @endif/>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-group">
                                @if($room && $room->images)
                                    @foreach($room->images as $image)
                                        <img id="preview" src="@if($image){{ Storage::url($image->image) }} @endif" class="img-responsive" style="height: 150px; width: 150px; margin: 10px; @if($image && $image->image) display:inline-block; @else display: none; @endif">
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            @if($room->get_meta())
                                @foreach ($room->get_meta() as $meta)
                                    <div class="checkbox">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="meta[]" value="{{$meta}}" checked>
                                            {{$meta}}
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update Room</button>
                    </div>
                </form> --}}
                        
            </div>
        </div>
    </div>

</div>
@endsection
