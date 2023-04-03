<div class='old-images'>
    @foreach ($images as $image)
        <div class='old-images-block'>
            <img src='{{ asset("storage/car_images/".$image->name ?? "noimage.jpg") }}'>
            <input type='hidden' name='old_images[]' value='{{ $image->name }}'>
            <label>{{ $image->name }}</label>
            <i class="far fa-trash-alt remove-image"></i>
        </div>
    @endforeach
</div>

<label for="images">Images</label>
<div class="input-group">
    <div class="custom-file">
        <input multiple type="file" class="custom-file-input" name="images[]" id="images" accept="image/*">
        <label class="custom-file-label" for="images">Pasirinkti nuotrauką</label>
    </div>
    <div class="input-group-append">
        <span class="input-group-text">Įkelti</span>
    </div>
</div>