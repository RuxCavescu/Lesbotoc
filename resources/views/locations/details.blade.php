@extends('layouts.main')

@section('content')

<div class="admin__bar">
    <h1 class="admin__title">Locations administration</h1>
</div>
    
@include('locations/messages')

<div class="locations-container">
    <div class="location-data">
        <div class="form-container">
        
            @if ($isNew)
                <form class="form-item" action="{{ route("locations.create") }}" method="post">   
                    <h3>CREATE NEW LOCATION</h3> 
            @else
                <form class="form-item" action="{{ route("locations.edit", $location->id) }}" method="post">
                    @method("patch")   
                    <h3>EDIT YOUR LOCATION</h3>     
            @endif
            
                @csrf
                @include('locations/form-template', ["buttonLabel" => $isNew ? "CREATE" : "EDIT"])
            </form>
        
            @if (!$isNew)
                <form class="form-item" action="{{ route("locations.delete", $location->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="input-button red" type="submit">DELETE LOCATION</button>
                </form>
            @endif    
        
        </div>
        
    
    </div>

    
</div>
@endsection


