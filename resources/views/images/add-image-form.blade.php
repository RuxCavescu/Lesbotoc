<form class="add__image" method="post" enctype="multipart/form-data" action="{{route("save-image")}}">
    @csrf
    <h2 class="add__image-title"> Add a new image: </h2>
    <p class="add__image-title">You can add up to 10 images at once. </p>
    <input class="add__image-input" type="file" name="uploaded_file">
    <input class="add__image-input" type="text" name="alt" value="" placeholder="Image description"> 
    {{-- <input class="add__image-input" type="file" name="uploaded_file"> --}}
    <button class="button add__image-add"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
        <div class="button__text">Add a new image</div>
    </button>
            {{-- <?= phpinfo() ?> --}}
</form>