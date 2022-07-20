<form action="{{route("locations.edit", $location->id)}}" method="POST">
    @csrf
    @method('patch')



        <input class="input-button" type="submit" value="Save the Changes">
</form>
