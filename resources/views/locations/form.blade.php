
@if($location->id)
<h1>Edit an existing location</h1>
<form action="" method="POST"></form>
@csrf
@method("PATCH")

@else
<h1>Create a new location</h1>
<form action="" method="POST">
    @csrf
@endif

<label for="location_name">Location Name</label>
<input 
    type="text" 
    id="location_name" 
    name="location_name" 
    value="{{old('location_name', $location->name)}}">

<label for="address">Address</label>
<input 
    type="text"
    id="address"
    name="address"
    value="{{old('address', $location->address)}}">

<label for="website">Website</label>
<input 
    type="text"
    id="website"
    name="website"
    value="{{old('website', $location->location_website)}}">

<label for="latitude"></label>
<input 
    type="text"
    id="latitude"
    name="latitude"
    value="{{old('latitude', $location->location_latitude)}}">

<label for="longtitude"></label>
<input 
    type="text"
    id="longtitude"
    name="longtitude"
    value="{{old('longtitude', $location->location_longtitude)}}">

</form>
