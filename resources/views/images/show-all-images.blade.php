    <div class="images__intro">
    <h2>View and add images</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea provident expedita vitae error atque nobis iste tempore cumque unde placeat dolorem et, aspernatur eos repudiandae, fugit alias facere laudantium ad.</p>
    </div>
    {{-- @include('layout/messages') --}}

    <div class="images__container">
        @foreach ($images as $image)
            <div class="image">
            <img src="{{$image->path}}" alt="{{$image->alt}}">
            <div class="image__info">
                    <p><strong>Description:</strong> {{$image->alt}}</p>
                    <p> <strong>URL:</strong> <?=$content = substr($image->path, strrpos($image->path, '/')); ?>
                    <form action="{{ route('delete-image', ['id' => $image->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete__image-btn">Delete</button>
                    </form>
            </div>
            </div>

        @endforeach
    </div>
</div>
