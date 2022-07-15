<form action="{{route("locations.delete", $location->id)}}" method="POST">
    @csrf
    @method('DELETE')

    @include('locations.form-template')
    

</form>
