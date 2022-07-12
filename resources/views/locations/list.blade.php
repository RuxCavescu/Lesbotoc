<div class="list-container">
<ul>
@foreach ($locations as $location)
    <a href="locations/detail/{{$location->id}}"><li>{{$location->name}}</li></a>
    <a href="locations/edit/{{$location->id}}"></a>
@endforeach
</ul>
<a href="locations/create"><button>Create Location</button></a>
    
</div>

<div class="form-container">
    @include('locations/form')
</div>