@extends('layouts/main')

@section('content')
<h1>List of contacts:</h1>
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone Number</td>
    </tr>
  @foreach ($contacts as $contact)
    <tr>
        <td>{{$contact->name}} </td>
        <td>{{$contact->email}} </td>
        <td>{{$contact->phone}} </td>
        <td><button>Delete Contact</button></td>
        <td><button><a href="contacts/{{$contact->id}}/edit">Edit Contact</a></button></td>
    </tr>
  @endforeach
</table>
    
@endsection
