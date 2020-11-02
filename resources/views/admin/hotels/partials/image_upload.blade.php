@if(!isset($images))
<h3 class="block">Add Images</h3>
<div class="dropbox" id="dropbox">
    <input type="file" id="gallery-photo-add" multiple accept="image/*">
    <span>click here or drop your files</span>
</div>
<div class="form-group">
    <div class="gallery">
        {{-- images will add here or preview here  --}}
    </div>
</div>
@else   
<h3 class="block">Add Images</h3>
<div class="dropbox" id="dropbox">
    <input type="file" id="gallery-photo-add" multiple accept="image/*">
    <span>click here or drop your files</span>
</div>

<div class="form-group">
    <div class="gallery">
        
    </div>
    <div class="existed-gallery">
        @foreach($images as $image)
            <div class="prev">
                <img src="{{Storage::url($image->image)}}" alt="">
                <button class="removeFS" data-url="{{route('gallery.delete', $image->id)}}" data-token="{{csrf_token()}}">X</button>
            </div>
        @endforeach
    </div>
</div>  
@endif