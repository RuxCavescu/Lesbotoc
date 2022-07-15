<form action="{{route("locations.delete", $location->id)}}" method="POST">
    @csrf
    @method('DELETE')
    
<label for="location_name">Location Name</label>
<input 
    type="text" 
    id="location_name" 
    name="location_name" 
    value="{{old('location_name', $location->name)}}" readonly>
    <br>

<label for="address">Address</label>
<input 
    type="text"
    id="address"
    name="address"
    value="{{old('address', $location->address)}}" readonly>
    <br>

<label for="website">Website</label>
<input 
    type="text"
    id="website"
    name="website"
    value="{{old('website', $location->location_website)}}" readonly>
    <br>

<label for="latitude">Latitude</label>
<input 
    type="text"
    id="latitude"
    name="latitude"
    value="{{old('latitude', $location->latitude)}}" readonly>
    <br>

<label for="longtitude">Longtitude</label>
<input 
    type="text"
    id="longtitude"
    name="longtitude"
    value="{{old('longtitude', $location->longtitude)}}" readonly>
    <br>
    <div class="btn-container">
        <input class="input-button" type="submit" value="Delete Location">
        
        {{-- adapt this later like delete button --}}
            
    </div>
</form>
<a class="button-a" href="/admin/locations"><button class="button">Back</button></a>
<a class="button-a" href="/admin/locations/edit"><button class="button">Edit Location</button></a>

