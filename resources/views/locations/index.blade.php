<link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700&display=swap" rel="stylesheet">

<h3>List of locations</h3>

<div class="list-container">
<ul>
@foreach ($locations as $location)
    <li>{{$location->name}}</li>
    <a href="locations/edit/{{$location->id}}"><button>Edit</button></a>
    <button>Delete</button>
@endforeach
</ul>
</div>

