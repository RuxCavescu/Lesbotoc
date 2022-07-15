@extends('layouts.main')

@section('content')

<div class="admin__bar">
    <h1 class="admin__title">Locations administration</h1>
</div>
    
@include('locations/messages')

<div class="locations-container">
    <div class="location-data">
        <div class="form-container">
        <form action="{{ route("locations.create") }}" method="post">
            @csrf 
            @include('locations/form-template', ["buttonLabel" => "CREATE"])
        </form>    
        </div>
        
    
    </div>

    
</div>
@endsection

