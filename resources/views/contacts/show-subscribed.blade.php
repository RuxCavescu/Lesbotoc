@extends('layouts/main')

@section('content')
    <h1>List of subscribed contacts:</h1>
    <table>
            <tr class="contacts__columns">
                <td>Name</td>
                <td>Email</td>
                <td>Phone Number</td>
            </tr>
        @foreach ($subscribedContacts as $contact)
            <tr class="contact__row">
                <td class="contact__columns-name"> {{$contact->name}} </td>
                <td class="contact__columns-email"> {{$contact->email}} </td>
                <td class="contact__columns-phone"> {{$contact->phone ? $contact->phone : '-'}} </td>   
                <td>
                    <form action="{{ route('delete-contact', ['id' => $contact->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="fa fa-trash"></button>
                    </form>
                </td>

                <td>
                    <a href="{{$contact->id}}/edit"><button class="fa fa-edit"></button></a>
                </td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{route("contacts-export")}}">Download subscribed data</a></button>
    @endsection
