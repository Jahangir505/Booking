@if(!isset($hotel))
<form class="form-horizontal1" action="{{$url}}" id="create_hotel_form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-wizard">
        <div class="form-body" id="smartwizard">
            <ul>
                <li><a href="#step-1">Basic<br /><small>Add Basic Hotel Info</small></a></li>
                <li><a href="#step-2">Facilities<br /><small>Add facilities</small></a></li>
                <li><a href="#step-3">Gallery<br /><small>Add Images</small></a></li>
            </ul>
         
            <div class="tab-content">
                <div id="step-1">
                    <h3 class="block">Add basics Info</h3>
                    <div class="form-group">
                        <label for="hotel_name">Hotel Name</label>
                        <input type="text" class="form-control @if($errors->has('name')) has-error @endif" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="summernote">Hotel Description</label>
                        <textarea class="form-control @if($errors->has('description')) has-error @endif" name="description" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Hotel Location</label>
                        <input  class="form-control @if($errors->has('location')) has-error @endif" name="location" required/>
                    </div>
                    <div class="form-group">
                        <label>Hotel Address</label>
                        <input  class="form-control @if($errors->has('address')) has-error @endif" name="address" required/>
                    </div>
                    <div class="form-group">
                        <label>Stars</label>
                        <select class="form-control" name="stars">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="tab-pane" id="step-2">
                    <h3 class="block">Add Facilities</h3>
                    @include('admin.hotels.partials.facilities')
                </div>

                <div id="step-3">
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
@elseif(isset($hotel))
<form class="form-horizontal1" action="{{$url}}" id="create_hotel_form" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-wizard">
        <div class="form-body" id="smartwizard">
            <ul>
                <li><a href="#step-1">Basic<br /><small>Add Basic Hotel Info</small></a></li>
                <li><a href="#step-2">Facilities<br /><small>Add facilities</small></a></li>
                <li><a href="#step-3">Gallery<br /><small>Add Images</small></a></li>
            </ul>
        
            <div class="tab-content">
                <div id="step-1">
                    <h3 class="block">Add basics Info</h3>
                    <div class="form-group">
                        <label for="hotel_name">Hotel Name</label>
                        <input type="text" class="form-control @if($errors->has('name')) has-error @endif" name="name" value="{{$hotel->name}}">
                    </div>

                    <div class="form-group">
                        <label for="summernote">Hotel Description</label>
                        <textarea class="form-control @if($errors->has('description')) has-error @endif" name="description" rows="10">{{$hotel->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Hotel Location</label>
                        <input  class="form-control @if($errors->has('location')) has-error @endif" name="location" value="{{$hotel->location}}"/>
                    </div>
                    <div class="form-group">
                        <label>Hotel Address</label>
                        <input  class="form-control @if($errors->has('address')) has-error @endif" name="address" value="{{$hotel->address}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Stars</label>
                        <select class="form-control" name="stars">
                            <option value="1" @if($hotel->stars == 1) selected @endif>1</option>
                            <option value="2" @if($hotel->stars == 2) selected @endif>2</option>
                            <option value="3" @if($hotel->stars == 3) selected @endif>3</option>
                            <option value="4" @if($hotel->stars == 4) selected @endif>4</option>
                            <option value="5" @if($hotel->stars == 5) selected @endif>5</option>
                        </select>
                    </div>
                </div>

                <div class="tab-pane" id="step-2">
                    <h3 class="block">Add Facilities</h3>
                    @include('admin.hotels.partials.facilities', ['existed_facilities' => $hotel->getFacilities()])
            
                </div>

                <div id="step-3">
                    @include('admin.hotels.partials.image_upload', ['images' => $hotel->images])
                    
                    <div class="form-group">
                        <button class="btn btn-primary btn-block btn-lg">Update</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endif