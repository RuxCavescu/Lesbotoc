<label for="location_name">Location Name</label>
<input 
    class="input-item"
    type="text" 
    id="location_name" 
    name="location_name" 
    value="{{old('location_name', $location->name)}}">
<br>

<label for="address">Address</label>
<input 
    class="input-item"
    type="text"
    id="address"
    name="address"
    value="{{old('address', $location->address)}}">
<br>

<label for="website">Website</label>
<input 
    class="input-item"
    type="text"
    id="website"
    name="website"
    value="{{old('website', $location->location_website)}}">
<br>

<label for="latitude">Latitude</label>
<input 
    class="input-item"
    type="text"
    id="latitude"
    name="latitude"
    value="{{old('latitude', $location->latitude)}}">
<br>

<label for="longtitude">Longtitude</label>
<input 
    class="input-item"
    type="text"
    id="longtitude"
    name="longtitude"
    value="{{old('longtitude', $location->longtitude)}}">
<br>

<input class="input-button" type="submit" class="" value="{{$buttonLabel}}">