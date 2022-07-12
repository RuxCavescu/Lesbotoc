@extends('layouts/main')

@section('content')
    <h1>List of contacts:</h1>

    @include('contacts/messages')

    {{-- <div class="contacts">
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
    </div> --}}

    <button><a href="{{route("create-contact")}}">Manually create contact</a></button>

    @include('contacts/show-all-contacts')

    {{-- <table>
        <tr class="contacts__columns">
            <td>Name</td>
            <td>Email</td>
            <td>Phone Number</td>
        </tr>
    @foreach ($contacts as $contact)
        <tr class="contact__row">
            <td>{{$contact->name}} </td>
            <td>{{$contact->email}} </td>
            <td>{{$contact->phone}} </td>
            <td><i class="fa fa-trash"></i></td>
            <td><a href="contacts/{{$contact->id}}/edit"><i class="fa fa-edit"></a></td>
        </tr>
    @endforeach
    </table> --}}
        
@endsection
