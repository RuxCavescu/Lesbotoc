
@if($location->id)

<form action="{{route("locations.index", $location->id)}}" method="POST"></form>
@csrf
@method("PATCH")

@else
<h1>Create a new location</h1>
<form action="{{route("locations.create", $location->id)}}" method="POST">
    @csrf
@endif

<label for="location_name">Location Name</label>
<input 
    type="text" 
    id="location_name" 
    name="location_name" 
    value="{{old('location_name', $location->name)}}">
    <br>

<label for="address">Address</label>
<input 
    type="text"
    id="address"
    name="address"
    value="{{old('address', $location->address)}}">
    <br>

<label for="website">Website</label>
<input 
    type="text"
    id="website"
    name="website"
    value="{{old('website', $location->location_website)}}">
    <br>

<label for="latitude">Latitude</label>
<input 
    type="text"
    id="latitude"
    name="latitude"
    value="{{old('latitude', $location->latitude)}}">
    <br>

<label for="longtitude">Longtitude</label>
<input 
    type="text"
    id="longtitude"
    name="longtitude"
    value="{{old('longtitude', $location->longtitude)}}">
    <br>

</form>
