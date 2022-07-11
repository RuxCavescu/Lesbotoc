@extends('layouts/main')

@section('content')
<h1>Please edit the contact:</h1>
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone Number</td>
    </tr>
    <form action="{{ route('update-contact', ['id' => $contact->id]) }}" method="post">
        @csrf
        <td><input type='text' name='name' value={{$contact->name}} ></td>
        <td><input type='email' name='email' value={{$contact->email}} ></td>
        <td><input type='tel' name='phone' value={{$contact->phone}} ></td>
        <td><button>Save</button></td></td>
    </tr>
</table>
@endsection