 

    <ul class="u-list">
    @foreach ($locations as $location)
    <a href="locations/detail/{{$location->id}}"><li class="list-item"><button class="list-btn">{{$location->name}}</button></li></a>
    <a href="locations/edit/{{$location->id}}"></a>
    @endforeach
    </ul>
    <a class="button-a" href="locations/create"><button class="input-button">Create Location</button></a>   


