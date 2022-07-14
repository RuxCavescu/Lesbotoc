<form action="{{route("locations.delete", $location->id)}}" method="POST">
    @csrf
    @method('DELETE')
    
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
    value="{{old('latitude', $location->location_latitude)}}">
    <br>

<label for="longtitude">Longtitude</label>
<input 
    type="text"
    id="longtitude"
    name="longtitude"
    value="{{old('longtitude', $location->location_longtitude)}}">
    <br>
  <input type="submit" value="Delete Location">
</form>

