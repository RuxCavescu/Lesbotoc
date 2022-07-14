@extends('layouts/main') 

@section('content')

<div class="index-container">

    <div class="admin__bar">
        <h2 class="admin__title">Locations administration</h2>
    </div>
    

    <div class="locations-container">
            
        <div class="locations-intro">
            <h2>You can create, edit, delete locations here</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae temporibus eius suscipit enim quas fuga nihil laudantium aspernatur culpa sit nesciunt provident commodi necessitatibus laboriosam officia expedita, doloremque optio?</p>
        </div>

        <div class="location-data">
            <div class="list-container">
            @include('locations/list')
            </div> 

    </div>

    
</div>
@endsection
