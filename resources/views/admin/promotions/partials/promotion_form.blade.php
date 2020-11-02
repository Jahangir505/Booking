@if(!isset($promotion))
<form method="POST" action="{{route('promotions.store')}}" autocomplete="off">
    @csrf
    <div class="form-group">
        <select class="custom-select form-control" name="hotel_id">
            <option selected value="">Select A Hotel</option>
            @foreach ($hotels as $hotel)
                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <select class="custom-select form-control" name="room_id">
            <option selected value="">Select A Room</option>
            @foreach ($rooms as $room)
                <option value="{{$room->id}}">{{$room->room_type}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Promotion Name</label>
        <input type="text" name="name" class="form-control" placeholder="Promotion Name">
    </div>

    <div class="form-group">
        <label>Discount Parcentage</label>
        <select name="discount" class="form-control">
            <option value="">Select Discount Amount</option>
            <option value="10">10%</option>
            <option value="15">15%</option>
            <option value="20">20%</option>
        </select>
    </div>
    <div class="form-group">
        <label>Promotion Valid For Number Of Hours</label>
        <select name="valid_time" class="form-control">
            <option value="">Select Hours</option>
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="7">7</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
    </div>
    <div class="form-group">
        <label>From Date</label>
        <input class="form-control datepicker" name="from_date"  data-date-format="yyyy-mm-dd" placeholder="valid from">
    </div>

    <div class="form-group">
        <label>To Date</label>
        <input class="form-control datepicker" name="to_date" data-date-format="yyyy-mm-dd" placeholder="valid to">
    </div>

    <div class="form-group">
        <label>Valid For Nationality</label>
        <input class="form-control" name="valid_for_nationality" placeholder="Valid For Nationality">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Save Promotions</button>
    </div>
</form>

@else 
<form method="POST" action="{{route('promotions.update', $promotion->id)}}" autocomplete="off">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Hotel name</label>
        <select class="custom-select form-control" name="hotel_id">
            <option selected value="">Select A Hotel</option>
            @foreach ($hotels as $hotel)
                <option value="{{$hotel->id}}" @if($promotion->hotel && $hotel->id  == $promotion->hotel->id) selected @endif>{{$hotel->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Room type</label>
        <select class="custom-select form-control" name="room_id">
            <option selected value="">Select A Room</option>
            @foreach ($rooms as $room)
                <option value="{{$room->id}}" @if($promotion->room && $room->id == $promotion->room->id) selected @endif>{{$room->room_type}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Promotion Name</label>
        <input type="text" name="name" class="form-control" placeholder="Promotion Name" value="{{$promotion->name}}">
    </div>

    <div class="form-group">
        <label>Discount Parcentage</label>
        <select name="discount" class="form-control">
            <option value="">Select Discount Amount</option>
            @if($promotion->discount)  
            <option selected value="{{$promotion->discount}}">{{$promotion->discount}}%</option> 
            @endif
            <option value="10">10%</option>
            <option value="15">15%</option>
            <option value="20">20%</option>
        </select>
    </div>

    <div class="form-group">
        <label>Promotion Valid For Number Of Hours</label>
        <select name="valid_time" class="form-control" >
            <option >Select Hours</option>
            @if($promotion->valid_time)  
            <option selected value="{{$promotion->valid_time}}">{{$promotion->valid_time}}hours</option> 
            @endif
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="7">7</option>
            <option value="12">12</option>
            <option value="14">14</option>
        </select>
    </div>

    <div class="form-group">
        <label>From Date</label>
        <input class="form-control datepicker" name="from_date" value="{{$promotion->from_date}}" data-date-format="yyyy-mm-dd" placeholder="valid from">
    </div>

    <div class="form-group">
        <label>To Date</label>
        <input class="form-control datepicker" name="to_date" value="{{$promotion->to_date}}" data-date-format="yyyy-mm-dd" placeholder="valid to">
    </div>

    <div class="form-group">
        <label>Valid For Nationality</label>
        <input class="form-control" name="valid_for_nationality" placeholder="Valid For Nationality" value="{{$promotion->valid_for_nationality}}">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Update Promotion</button>
    </div>
</form>
@endif