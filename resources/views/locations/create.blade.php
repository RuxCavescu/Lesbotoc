@extends('layouts.main')

@section('content')

<div class="admin__bar">
    <h1 class="admin__title">Locations administration</h1>
</div>
    

<div class="locations-container">
            <div class="location-data">
                <div class="list-container">
                @include('locations/empty_form')</div>
            </div>
        </div>
    </div>

    
</div>
@endsection

