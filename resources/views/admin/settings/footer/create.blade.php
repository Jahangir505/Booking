@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>footer one</div>
                <div class="tools">
                    <a href="" class="expand" data-original-title="" title=""> </a>
                    <a href="" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body" style=" @if($footer_one) display: block; @else display: none; @endif">
                <h4 class="block">Add Info</h4>
                
                <form role="form" action="{{route('footer.update')}}" method="POST">
                   {{ csrf_field() }}
                    <input type="hidden" name="section_type" value="footer">
                    <input type="hidden" name="section_name" value="footer_one">
                    <div class="row" >
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="title">Section Title</label>
                                <input type="text" class="form-control" name="title" placeholder="e.g... company" value="@if($footer_one) {{$footer_one->title}} @endif"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Section SubTitle</label>
                                <input type="text" class="form-control" name="subtitle" placeholder="e.g... company for etc.. not required" value="@if($footer_one) {{$footer_one->subtitle}} @endif"/>
                            </div>

                            @if($footer_one)
                                <input type="hidden" name="footer_one_length" value="{{$footer_one->property_length()}}">
                                @for ($i = 0; $i < $footer_one->property_length(); $i++)
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$footer_one->get_properties()[$i]['link_title'] ?? ''}}" name="properties[{{$i}}][link_title]" placeholder="title e.g. Google">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$footer_one->get_properties()[$i]['link_value'] ?? ''}}" name="properties[{{$i}}][link_value]" placeholder="link e.g. https://google.com">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-danger reomve-property" data-index="{{$i}}">Remove</button>
                                    </div>
                                </div>
                                @endfor
                            @endif

                            <div id="footer-one">
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

    <div class="col-md-6">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>footer two</div>
                <div class="tools">
                    <a href="" class="expand" data-original-title="" title=""> </a>
                    
                    <a href="" class="reload" data-original-title="" title=""> </a>
                    <a href="" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body" style=" @if($footer_two) display: block; @else display: none; @endif">
                <h4 class="block">Add Info</h4>
                <form role="form" action="{{route('footer.update')}}" method="POST">
                   {{ csrf_field() }}
                    <input type="hidden" name="section_type" value="footer">
                    <input type="hidden" name="section_name" value="footer_two">
                    <div class="row" >
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="title">Section Title</label>
                                <input type="text" class="form-control" name="title" placeholder="e.g... company" value="@if($footer_two) {{$footer_two->title}} @endif"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Section SubTitle</label>
                                <input type="text" class="form-control" name="subtitle" placeholder="e.g... company for etc.. not required" value="@if($footer_two) {{$footer_two->subtitle}} @endif"/>
                            </div>

                            @if($footer_two)
                                <input type="hidden" name="footer_two_length" value="{{$footer_two->property_length()}}">
                                @for ($i = 0; $i < $footer_two->property_length(); $i++)
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$footer_two->get_properties()[$i]['link_title'] ?? ''}}" name="properties[{{$i}}][link_title]" placeholder="title e.g. Google">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" value="{{$footer_two->get_properties()[$i]['link_value'] ?? ''}}" name="properties[{{$i}}][link_value]" placeholder="link e.g. https://google.com">
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-danger reomve-property" data-index="{{$i}}">Remove</button>
                                    </div>
                                </div>
                                @endfor
                            @endif
                            <div id="footer-two">
                               {{-- dynamic field will be here  --}}
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="button" id="btnAdd-2" class="btn green btn-circle btn-sm">Add Links</button>
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

    <div class="col-md-12">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>footer three</div>
                <div class="tools">
                    <a href="" class="expand" data-original-title="" title=""> </a>
                    
                    <a href="" class="reload" data-original-title="" title=""> </a>
                    <a href="" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body" style=" @if($footer_three) display: block; @else display: none; @endif">
                <h4 class="block">Add Info</h4>
                <form role="form" action="{{route('footer.update')}}" method="POST">
                   {{ csrf_field() }}
                    <input type="hidden" name="section_type" value="footer">
                    <input type="hidden" name="section_name" value="footer_three">
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Section Title</label>
                                <input type="text" class="form-control" name="title" placeholder="e.g... company" value="@if($footer_three) {{$footer_three->title}} @endif"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Section SubTitle</label>
                                <input type="text" class="form-control" name="subtitle" placeholder="e.g... company for etc.. not required" value="@if($footer_three) {{$footer_three->subtitle}} @endif"/>
                            </div>
                            @if($footer_three)
                                <input type="hidden" name="footer_three_length" value="{{$footer_three->property_length()}}">
                                @for ($i = 0; $i < $footer_three->property_length(); $i++)
                                <div class="row form-group">
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" value="{{$footer_three->get_properties()[$i]['link_icon'] ?? ''}}" name="properties[{{$i}}][link_icon]" placeholder="icon e.g. fontawesome">
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" value="{{$footer_three->get_properties()[$i]['link_title'] ?? ''}}" name="properties[{{$i}}][link_title]" placeholder="title e.g. Google">
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" value="{{$footer_three->get_properties()[$i]['link_value'] ?? ''}}" name="properties[{{$i}}][link_value]" placeholder="link e.g. https://google.com">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-danger reomve-property" data-index="{{$i}}">Remove</button>
                                    </div>
                                </div>
                                @endfor
                            @endif

                            <div id="footer-three">
                               {{-- dynamic field will be here  --}}
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="button" id="btnAdd-3" class="btn green btn-circle btn-sm">Add Links</button>
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

    <div class="col-md-12">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>footer four</div>
                <div class="tools">
                    <a href="" class="expand" data-original-title="" title=""> </a>
                    
                    <a href="" class="reload" data-original-title="" title=""> </a>
                    <a href="" class="remove" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body" style=" @if($footer_four) display: block; @else display: none; @endif">
                <h4 class="block">Add Info</h4>
                
                <form role="form" action="{{route('footer.update')}}" method="POST">
                   {{ csrf_field() }}
                    <input type="hidden" name="section_type" value="footer">
                    <input type="hidden" name="section_name" value="footer_four">
                    <div class="row" >
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="title">Section Title</label>
                                <input type="text" class="form-control" name="title" placeholder="e.g... company" value="@if($footer_four) {{$footer_four->title}} @endif"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Section SubTitle</label>
                                <input type="text" class="form-control" name="subtitle" placeholder="e.g... company for etc.. not required" value="@if($footer_four) {{$footer_four->subtitle}} @endif"/>
                            </div>

                            @if($footer_four)
                                <input type="hidden" name="footer_four_length" value="{{$footer_four->property_length()}}">
                                @for ($i = 0; $i < $footer_four->property_length(); $i++)
                                <div class="row form-group">
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" value="{{$footer_four->get_properties()[$i]['link_icon'] ?? ''}}" name="properties[{{$i}}][link_icon]" placeholder="icon e.g. fontawesome">
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" value="{{$footer_four->get_properties()[$i]['link_title'] ?? ''}}" name="properties[{{$i}}][link_title]" placeholder="title e.g. Google">
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" value="{{$footer_four->get_properties()[$i]['link_value'] ?? ''}}" name="properties[{{$i}}][link_value]" placeholder="link e.g. https://google.com">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-danger reomve-property" data-index="{{$i}}">Remove</button>
                                    </div>
                                </div>
                                @endfor
                            @endif

                            <div id="footer-four">
                               {{-- dynamic field will be here  --}}
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="button" id="btnAdd-4" class="btn green btn-circle btn-sm">Add Links</button>
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

    $(".reomve-property").on("click", function(e){
        e.preventDefault();
        $(this).parent().parent().remove();
    });

    function footer_one(wrapper, addBtn, length, removeBtn) {

        var x = 0;
        if ($(`input[name="${length}"]`).val()) {
            x = +$(`input[name="${length}"]`).val();
        }

        var wrapper = $(wrapper);

        $(addBtn).on("click", function(e){
            e.preventDefault();

            var field = `
                <div class="row group1 form-group">
                    <div class="col-md-5">
                        <input class="form-control" type="text" name="properties[${x}][link_title]" placeholder="title e.g. Google">
                    </div>
                    <div class="col-md-5">
                        <input class="form-control" type="text" name="properties[${x}][link_value]" placeholder="link e.g. https://google.com">
                    </div>
                    <div class="col-md-2">
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


    function footer_two(wrapper, addBtn, length, removeBtn) {

        var x = 0;
        
        if ($(`input[name="${length}"]`).val()) {
            x = +$(`input[name="${length}"]`).val();
        }

        var wrapper = $(wrapper);

        $(addBtn).on("click", function(e){
            e.preventDefault();

            var field = `
                <div class="row group1 form-group">
                    <div class="col-md-5">
                        <input class="form-control" type="text" name="properties[${x}][link_title]" placeholder="title e.g. Google">
                    </div>
                    <div class="col-md-5">
                        <input class="form-control" type="text" name="properties[${x}][link_value]" placeholder="link e.g. https://google.com">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger ${removeBtn}">Remove</button>
                    </div>
                </div>
            `;
            
            $(wrapper).append(field);

            x++;
        });

            $(wrapper).on("click", `.${removeBtn}`, function(){
                $(this).parent('div').parent('div.group1').remove();
            })

        }

    function footer_three(wrapper, addBtn, length, removeBtn) {

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
                        <input class="form-control" type="text" name="properties[${x}][link_icon]" placeholder="fontawesome e.g. Google">
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
            })

    }

    function footer_four(wrapper, addBtn, length, removeBtn) {

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
                        <input class="form-control" type="text" name="properties[${x}][link_icon]" placeholder="fontawesome e.g. fa fa-class">
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
            })

    }

    footer_one("#footer-one", "#btnAdd-1", "footer_one_length", "removeBtn1");
    footer_two("#footer-two", "#btnAdd-2", "footer_two_length", "removeBtn2");
    footer_three("#footer-three", "#btnAdd-3", "footer_three_length", "removeBtn3");
    footer_four("#footer-four", "#btnAdd-4", "footer_four_length", "removeBtn4");

});
//     function readURL(input) {
//         if (input.files && input.files[0]) {
//         var reader = new FileReader();
        
//         reader.onload = function(e) {
//             $('#preview').show().attr('src', e.target.result);
//         }
        
//         reader.readAsDataURL(input.files[0]);
//         }
//   }
  
//   $("#image").change(function() {
//     readURL(this);
//   });

</script>
@endsection