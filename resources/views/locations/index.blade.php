@extends('layouts/main') 

@section('content')



<div class="index-container">

    <div class="admin__bar">
        <h2 class="admin__title">Locations administration</h2>
    </div>
    

    <div class="locations-container">
            
        <div class="locations-intro">
            <h2>You can create, edit, delete locations here</h2>
            
            @include('locations/messages')
            
            <h3 class="h3-item">Click location to show / edit / delete. </h3>
        </div>

        <div class="location-data">
            <div class="list-container">
            @include('locations/list')
            </div> 

    </div>

    
</div>
@endsection

