@extends('layouts/main')

@section('content')
<div class="index-container">

    <div class="admin__bar">
        <h2 class="admin__title">Locations administration</h2>
    </div>
    

    <div class="locations-container">

       <div class="location-data">

            <div class="list-container">

                <ul>
                <a href="locations/detail/{{$location->id}}"><li><button class="list-btn">{{$location->name}}</button></li></a>
                <a href="locations/edit/{{$location->id}}"></a>
                </ul>
                <br><br>
            <div class="form-container">
                @include('locations/delete')
            </div>
        </div>

    </div>
</form>
    
</div>
@endsection



