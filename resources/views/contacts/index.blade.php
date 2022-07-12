@extends('layouts/main')

@section('content')
<h1>List of contacts:</h1>
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif

    <div class="contacts">
        @foreach ($contacts as $contact)
    
            <div class="contacts__card">
                <h3>{{$contact->name}}</h3>
                <div>Email: {{$contact->email}}</div>
                <div>Phone Number: {{$contact->phone ? $contact->phone : '-'}}</div>
                <div class="buttons">
                    <a href="#"><i class="fa fa-trash"></i></a>
                    <a href="contacts/{{$contact->id}}/edit"><i class="fa fa-edit"></i></a>
                </div>
            </div>
    
        @endforeach
    </div>

    
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
            <td><i class="fa fa-trash"></i>Edit</td>
            <td><a href="contacts/{{$contact->id}}/edit"><i class="fa fa-edit"></a></td>
        </tr>
    @endforeach
    </table>
        
@endsection
