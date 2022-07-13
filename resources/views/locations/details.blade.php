{{-- <h1>Locations administration</h1>


<div class="form-container">
@include('locations.form')
</div>

<div class="list-container">
    {{-- @include('locations.list') --}}
{{-- </div> --}}


<link rel="stylesheet" href="/css/app.css">


<div class="index-container">

    <div class="admin-title--container">
        <h2 class="admin-title">Locations administration</h2>
    </div>
    

    <div class="locations-container">

        <div class="locations-intro">
            <h2>You can create, edit, delete locations here</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae temporibus eius suscipit enim quas fuga nihil laudantium aspernatur culpa sit nesciunt provident commodi necessitatibus laboriosam officia expedita, doloremque optio?</p>
        </div>

        <div class="location-data">

            <div class="list-container">

                <ul>
                <a href="locations/detail/{{$location->id}}"><li><button class="list-btn">{{$location->name}}</button></li></a>
                <a href="locations/edit/{{$location->id}}"></a>
                </ul>
                <br><br>
            <div class="form-container">
                @include('locations/form')
            </div>
        </div>
    </div>

    
</div>


