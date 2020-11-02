@if(!isset($rate))
<form method="POST" action="{{route('rates.store')}}" autocomplete="off">
    @csrf

    <div class="form-group">
        <select class="custom-select form-control" name="hotel_id">
            <option selected>Select A Hotel</option>
            @foreach ($hotels as $hotel)
                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <select class="custom-select form-control" name="room_id">
            <option selected>Select A Room</option>
            @foreach ($rooms as $room)
                <option value="{{$room->id}}">{{$room->room_type}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control">
    </div>

    <div class="form-group">
        <label>From Date</label>
        <input class="form-control datepicker" name="from_date" data-date-format="yyyy-mm-dd">
    </div>

    <div class="form-group">
        <label>To Date</label>
        <input class="form-control datepicker" name="to_date" data-date-format="yyyy-mm-dd">
    </div>

    <div class="form-group">
        <label>Nationality</label>
        <input class="form-control" name="nationality" placeholder="Nationality">
    </div>

    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="is_available" name="is_available">
        <label class="custom-control-label" for="is_available">Is Available</label>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Save Rates</button>
    </div>
</form>
@else 
<form method="POST" action="{{route('rates.update', $rate->id)}}" autocomplete="off">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Hotel name</label>
        <select class="custom-select form-control" name="hotel_id">
            <option selected>Select A Hotel</option>
            @foreach ($hotels as $hotel)
                <option value="{{$hotel->id}}" @if($rate->hotel && $hotel->id == $rate->hotel->id) selected @endif>{{$hotel->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Room Type</label>
        <select class="custom-select form-control" name="room_id">
            <option selected>Select A Room</option>
            @foreach ($rooms as $room)
                <option value="{{$room->id}}" @if($rate->room && $room->id == $rate->room_id) selected @endif>{{$room->room_type}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" value="{{$rate->price}}">
    </div>

    <div class="form-group">
        <label>From Date</label>
        <input class="form-control datepicker" name="from_date" value="{{$rate->from_date}}" data-date-format="yyyy-mm-dd">
    </div>

    <div class="form-group">
        <label>To Date</label>
        <input class="form-control datepicker" name="to_date" value="{{$rate->to_date}}" data-date-format="yyyy-mm-dd">
    </div>

    <div class="form-group">
        <label>Nationality</label>
        <input class="form-control" name="nationality" placeholder="Nationality" value="{{$rate->nationality}}">
    </div>

    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="is_available" name="is_available" {{$rate->is_available ? 'checked' : ''}}>
        <label class="custom-control-label" for="is_available">Is Available</label>
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Update Rates</button>
    </div>
</form>
@endif