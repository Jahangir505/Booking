@if(!isset($room))
<form class="form-horizontal1" action="{{$url}}" id="create_room_form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-wizard">
        <div class="form-body" id="smartwizard">
            <ul>
                <li><a href="#step-1">Basic<br /><small>Add Room Info</small></a></li>
                <li><a href="#step-2">Facilities<br /><small>Add room facilities</small></a></li>
                <li><a href="#step-3">Gallery<br /><small>Add room images</small></a></li>
            </ul>
         
            <div class="tab-content">

                <div id="step-1">
                    <h3 class="block">Add basics Info</h3>
                    <div class="form-group">
                        <label>Room Type</label>
                        <select name="room_type" class="form-control" required>
                            <option value="">Select Room Type</option>
                            <option value="single">Single</option>
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
                        <label>Total Rooms</label>
                        <input  class="form-control @if($errors->has('total_room')) has-error @endif" name="total_room" type="number" placeholder="total rooms" required/>
                    </div>
                    <div class="form-group">
                        <label>Available Rooms</label>
                        <input  class="form-control @if($errors->has('available_room')) has-error @endif" name="available_room" type="number" placeholder="available rooms" required/>
                    </div>
                    <div class="form-group">
                        <label>Room Description</label>
                        <textarea class="form-control @if($errors->has('description')) has-error @endif" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Room Price</label>
                        <input  class="form-control @if($errors->has('price')) has-error @endif" name="price" type="number" placeholder="room price"/>
                    </div>
                    <div class="form-group">
                        <label>Max Adults</label>
                        <input  class="form-control @if($errors->has('price')) has-error @endif" name="max_adults" type="number" placeholder="max adults"/>
                    </div>
                    <div class="form-group">
                        <label>Max Children</label>
                        <input  class="form-control @if($errors->has('price')) has-error @endif" name="max_children" type="number" placeholder="max children"/>
                    </div>
                    <div class="form-group">
                        <label>Room Status</label>
                        <select name="status" class="form-control" required>
                            <option value="">Select A Status</option>
                            <option value="enabled">Enabled</option>
                            <option value="disabled">Disabled</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hotel</label>
                        <select name="hotel_id" class="form-control" required>
                            <option value="">Select A Hotel</option>
                            @foreach ($hotels as $hotel)
                                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="tab-pane" id="step-2">
                    <h3 class="block">Add Facilities</h3>
                    @include('admin.hotels.partials.facilities')
                </div>

                <div id="step-3">
                    <h3 class="block">Add Images</h3>
                    @include('admin.hotels.partials.image_upload')
                    <div class="form-group">
                        <button class="btn btn-primary btn-block btn-lg">Save</button>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </div>
</form>
@elseif(isset($room))
<form class="form-horizontal1" action="{{$url}}" id="create_room_form" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-wizard">
        <div class="form-body" id="smartwizard">
            <ul>
                <li><a href="#step-1">Basic<br /><small>Add Room Info</small></a></li>
                <li><a href="#step-2">Facilities<br /><small>Add room facilities</small></a></li>
                <li><a href="#step-3">Gallery<br /><small>Add room images</small></a></li>
            </ul>
         
            <div class="tab-content">

                <div id="step-1">
                    <h3 class="block">Add basics Info</h3>
                    <div class="form-group">
                        <label>Room Type</label>
                        <select name="room_type" class="form-control" selected="{{$room->room_type}}">
                            <option value="single">Single</option>
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
                        <label>Total Rooms</label>
                        <input  class="form-control @if($errors->has('total_room')) has-error @endif" name="total_room" type="number" placeholder="total rooms" value="{{$room->total_room}}"/>
                    </div>
                    <div class="form-group">
                        <label>Available Rooms</label>
                        <input  class="form-control @if($errors->has('available_room')) has-error @endif" name="available_room" type="number" placeholder="available rooms" value="{{$room->available_room}}"/>
                    </div>
                    <div class="form-group">
                        <label>Room Description</label>
                        <textarea class="form-control @if($errors->has('description')) has-error @endif" name="description" rows="5">{{$room->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Room Price</label>
                        <input  class="form-control @if($errors->has('price')) has-error @endif" name="price" type="number" placeholder="room price" value="{{$room->price}}"/>
                    </div>
                    <div class="form-group">
                        <label>Max Adults</label>
                        <input  class="form-control @if($errors->has('price')) has-error @endif" name="max_adults" type="number" placeholder="max adults" value="{{$room->max_adults}}"/>
                    </div>
                    <div class="form-group">
                        <label>Max Children</label>
                        <input  class="form-control @if($errors->has('price')) has-error @endif" name="max_children" type="number" placeholder="max children" value="{{$room->max_children}}"/>
                    </div>
                    <div class="form-group">
                        <label>Room Status</label>
                        <select name="status" class="form-control" selected="{{$room->status}}">
                            <option value="enabled">Enabled</option>
                            <option value="disabled">Disabled</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hotel</label>
                            <select name="hotel_id" class="form-control" selected="{{$room->hotel->id}}">
                            @foreach ($hotels as $hotel)
                                <option value="{{$hotel->id}}" @if($room->hotel->id == $hotel->id) selected @endif>{{$hotel->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="tab-pane" id="step-2">
                    <h3 class="block">Add Facilities</h3>
                     @include('admin.hotels.partials.facilities', ['existed_facilities' => $room->getFacilities()])
               
                </div>
                <div id="step-3">
                    @include('admin.hotels.partials.image_upload', ['images' => $room->images])
                    <div class="form-group">
                        <button class="btn btn-primary btn-block btn-lg">update room</button>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </div>
</form>
@endif