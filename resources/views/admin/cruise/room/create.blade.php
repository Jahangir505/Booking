@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Cruise Room</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <form action="{{route('cruises.rooms.store')}}" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Room Types</label>
                        <select name="type" class="form-control">
                            <option value="" selected>Select A Room Type</option>
                            <option value="inside">Inside</option>
                            <option value="outside">OutSide</option>
                            <option value="balcony">Balcony</option>
                            <option value="suit">Suit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cruises</label>
                        <select name="cruise_id" class="form-control">
                            <option value="" selected>Select A Cruise </option>
                           @foreach ($cruises as $cruise)
                                <option value="{{$cruise->id}}">{{$cruise->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Room Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Room Price Per night">
                    </div>

                    <div class="form-group">
                        <label>Cruise Room Images</label>
                        <div class="dropbox" id="dropbox">
                            <input type="file" id="gallery-photo-add"  accept="image/*" name="roomImages[]" multiple>
                            <span>click here to add room images</span>
                        </div>

                        <div class="gallery">
        
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Cruise Room Facilities</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="military" name="facilities[]" value="Military">
                                    <label class="custom-control-label" for="military">Military</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="free-internet" name="facilities[]" value="Free Internet">
                                    <label class="custom-control-label" for="free-internet">Free Internet</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Drink Specials" name="facilities[]" value="Drink Specials">
                                    <label class="custom-control-label" for="Drink Specials">Drink Specials</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Residential" name="facilities[]" value="Residential">
                                    <label class="custom-control-label" for="Residential">Residential</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Free Gratuities" name="facilities[]" value="Free Gratuities">
                                    <label class="custom-control-label" for="Free Gratuities">Free Gratuities</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Non Refundable Deposit" name="facilities[]" value="Non Refundable Deposit">
                                    <label class="custom-control-label" for="Non Refundable Deposit">Non Refundable Deposit</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Onboard Credit" name="facilities[]" value="Onboard Credit">
                                    <label class="custom-control-label" for="Onboard Credit">Onboard Credit</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Special Promotions" name="facilities[]" value="Special Promotions">
                                    <label class="custom-control-label" for="Special Promotions">Special Promotions</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="Buy One Get One Offer" name="facilities[]" value="Buy One Get One Offer">
                                    <label class="custom-control-label" for="Buy One Get One Offer">Buy One Get One Offer</label>
                                </div>
                            </div>
                        </div>
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