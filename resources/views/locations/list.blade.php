 

    <ul>
    @foreach ($locations as $location)
    <a href="locations/detail/{{$location->id}}"><li><button class="list-btn">{{$location->name}}</button></li></a>
    <a href="locations/edit/{{$location->id}}"></a>
    @endforeach
    </ul>
    <a href="locations/create"><button class="input-btn">Create Location</button></a>   


