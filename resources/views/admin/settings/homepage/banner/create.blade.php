@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Add Banner data</span>
                </div>
                
            </div>
            <div class="portlet-body form">
                <form class="form-horizontal" role="form" method="POST" action="{{route('store.banner')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group  @if($errors->has('image')) has-error @endif">
                       <label for="banner-image" class="col-md-3 control-label">Banner image</label>
                       <div class="col-md-9">
                            <span class="btn green fileinput-button">
                                <i class="fa fa-plus"></i>
                                <span>Choose image... </span>
                                <input type="file" name="image" id="image"> 
                            </span>
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <img id="preview" src="@if($banner) {{ Storage::url($banner->image) }} @endif" class="img-responsive" style="height: 150px; width: 150px; @if($banner && $banner->image) display:block; @else display: none; @endif">
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('title')) has-error @endif">
                        <label class="col-md-3 control-label">Banner Title *</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="title" name="title" value="@if($banner) {{$banner->title}} @endif">
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('title')) has-error @endif">
                        <label class="col-md-3 control-label">Banner Title subtitle</label>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="subtitle" name="subtitle" value="@if($banner){{$banner->subtitle}} @endif">
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">update</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            $('#preview').show().attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
        }
  }
  
  $("#image").change(function() {
    readURL(this);
  });

</script>
@endsection