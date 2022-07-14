    <div class="images__intro">
    <h2>View and add images</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea provident expedita vitae error atque nobis iste tempore cumque unde placeat dolorem et, aspernatur eos repudiandae, fugit alias facere laudantium ad.</p>

    <div class="images__container">
        @foreach ($images as $image)
            <div class="image">
                <h4>{{$image->alt}}</h4>
                <img src="{{$image->path}}" alt="">
            </div>
        @endforeach
    </div>
