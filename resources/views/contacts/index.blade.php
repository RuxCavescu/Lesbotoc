@extends('layouts/main')

@section('content')
<h1>List of contacts</h1>
<ul>
  @foreach ($contacts as $contact)
    <li>{{$contact->name}}</li>
  @endforeach
</ul>
    
@endsection
