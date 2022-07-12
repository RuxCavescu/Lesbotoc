@extends('layouts/main')
@section('content')

    <form action="{{route("save-contact")}}" method="POST">
        @csrf
        <h2> Add a new contact: </h2>
        <tr class="contact__row">
             <input type="text" name="name" value="{{$contact->name}}" placeholder="Name"> 
             <input type="text" name="email" value="{{$contact->email}}" placeholder="Email">
             <input type="text" name="phone" value="{{$contact->phone}}" placeholder="Phone">
             <div>
                 <p>Is the Contact subscribed?</p>
                 <label for="subscribed_yes">Yes</label>
                 <input id="is_subscribed_yes"  type="radio" name="is_subscribed" value="1" required         
                    @if ($contact->is_subscribed === 1)
                        checked
                    @endif>

                 <label for="subscribed_no">No</label>
                 <input id="is_subscribed_no"  type="radio" name="is_subscribed" value="0"        
                    @if ($contact->is_subscribed === 0)
                        checked
                    @elseif (!$contact->id)
                        checked
                    @endif>
             </div>
            <button>Save</button>
            {{-- <td><a href="contacts/{{$contact->id}}/edit"><i class="fa fa-edit"></a></td> --}}
        </tr>
    </form>

    {{-- <form action="{{route("save-contact")}}" method="POST">
        @csrf
        <label for="name">Name:</label>
            <input type="text" name="name" value="{{$contact->name}}" >
        <label for="name">Email:</label>
            <input type="text" name="email" value="{{$contact->email}}" >
        <label for="name">Phone Number:</label>
            <input type="text" name="phone" value="{{$contact->phone}}" >
            <button>Save</button>
    </form> --}}
    @include('contacts/show-all-contacts')
@endsection