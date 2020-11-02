@if(count($facilities) < 1)
    <div class="alert alert-warning">
        you haven't create facilities for please create <a href="{{route('facilities.create')}}">here</a>
    </div>
@endif

@if(count($facilities) > 0 && !isset($existed_facilities))
<div class="form-group row">
    @foreach ($facilities as $facility)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="{{$facility}}" name="facilities[]" value="{{$facility->name}}">
            <label class="custom-control-label" for="{{$facility->name}}">{{$facility->name}}</label>
        </div>
    @endforeach                                      
</div>
@else
    <div class="form-group">
        @if(isset($existed_facilities)) 
            @foreach ($existed_facilities as $facility)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="{{$facility}}" name="facilities[]" value="{{$facility}}" checked>
                    <label class="custom-control-label" for="{{$facility}}">{{$facility}}</label>
                </div>
            @endforeach
        @endif
    </div>
@endif