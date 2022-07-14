@extends('layouts/main')

@section('content')
    <div class="admin__bar"><h1 class="admin__title">Contacts Administration</h1></div>


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

<div class="buttons">
        <ul>
            {{-- <li class="contacts__item"><a href="{{route("create-contact")}}">Manually create contact</a></li> --}}
            {{-- <li class="contacts__item"><a href="{{route("subscribed-users")}}">See all subscribed users</a></li> --}}
            <button class="button"><i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                <a href="{{route("create-contact")}}">
                    <div class="button__text">Manually create contact</div>
                </a>
            </button>

            <button class="button modal_btn"><i class="fa fa-users" aria-hidden="true"></i>
                <div class="button__text">See subscribed users</div>
            </button>
        </u>
</div>
    @include('contacts/messages')
    @include('contacts/show-all-contacts')
    @include('contacts/subscriptions-modal')

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
