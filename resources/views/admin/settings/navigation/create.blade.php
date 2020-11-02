@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Navigation one</div>
                <div class="tools">
                    <a href="" class="expand" data-original-title="" title=""> </a>
                    
                    <a href="" class="reload" data-original-title="" title=""> </a>
                    <a href="" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body" style=" @if($navigation) display: block; @else display: none; @endif">
                <h4 class="block">Add links</h4>
                
                <form role="form" action="{{route('navigation.update')}}" method="POST">
                   {{ csrf_field() }}
                    <input type="hidden" name="section_type" value="header">
                    <input type="hidden" name="section_name" value="navigation">
                    <div class="row" >
                        <div class="col-md-12">
                            @if($navigation)
                                <input type="hidden" name="navigation_one_length" value="{{$navigation->property_length()}}">
                                @for ($i = 0; $i < $navigation->property_length(); $i++)
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$navigation->get_properties()[$i]['link_icon'] ?? ''}}" name="properties[{{$i}}][link_icon]" placeholder="link icon  e.g. fas fa-plan">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$navigation->get_properties()[$i]['link_title'] ?? ''}}" name="properties[{{$i}}][link_title]" placeholder="title e.g. Google">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$navigation->get_properties()[$i]['link_value'] ?? ''}}" name="properties[{{$i}}][link_value]" placeholder="link e.g. https://google.com">
                                    </div>
                                </div>
                                @endfor
                            @endif

                            <div id="navigation-one">
                               {{-- dynamic field will be here  --}}
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="button" id="btnAdd-1" class="btn green btn-circle btn-sm">Add Links</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <button class="btn green btn-circle btn-lg btn-block" type="submit">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

$(document).ready(function() {

    function navigation_one(wrapper, addBtn, length, removeBtn) {

        var x = 0;
        if ($(`input[name="${length}"]`).val()) {
            x = +$(`input[name="${length}"]`).val();
        }

        var wrapper = $(wrapper);

        $(addBtn).on("click", function(e){
            e.preventDefault();

            var field = `
                <div class="row group1 form-group">
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="properties[${x}][link_icon]" placeholder="font awesome icon e.g. fa fa-trash">
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="properties[${x}][link_title]" placeholder="title e.g. Google">
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="properties[${x}][link_value]" placeholder="link e.g. https://google.com">
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-danger ${removeBtn}">Remove</button>
                    </div>
                </div>
            `;
            
            $(wrapper).append(field);

            x++;
        });

        $(wrapper).on("click", `.${removeBtn}`, function(){
            $(this).parent('div').parent('div.group1').remove();
        });

    }




    navigation_one("#navigation-one", "#btnAdd-1", "navigation_one_length", "removeBtn1");

});


</script>
@endsection