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
        <td><input type='text' name='name' value='{{$contact->name}}' ></td>
        <td><input type='email' name='email' value='{{$contact->email}}' ></td>
        <td><input type='tel' name='phone' value='{{$contact->phone}}' ></td>
        <td>
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
        </td>
        <td><button>Save</button></td></td>
    </tr>
</table>
@include('contacts/messages')
@endsection