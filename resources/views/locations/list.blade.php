<div class="list-container">
<ul>
@foreach ($locations as $location)
    <a href="locations/detail/{{$location->id}}"><li>{{$location->name}}</li></a>
    <a href="locations/edit/{{$location->id}}">
@endforeach   
    <button>Edit</button></a>
    <button>Delete</button>
</ul>
</div>