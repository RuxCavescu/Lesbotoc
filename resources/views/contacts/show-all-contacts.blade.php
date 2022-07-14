    <table class="contacts__list">
            <tr class="contacts__columns">
                <td>Name</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>Subscribed?</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
        @foreach ($contacts as $contact)
            <tr class="contact__row">
                <td class="contact__columns-name"> {{$contact->name}} </td>
                <td class="contact__columns-email"> {{$contact->email}} </td>
                <td class="contact__columns-phone"> {{$contact->phone ? $contact->phone : '-'}} </td>
                <td class="contact__columns-subscribed"> {{$contact->is_subscribed ? 'Yes' : 'No'}} </td>
                <td>        
                <form action="{{ route('delete-contact', ['id' => $contact->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="button-fa fa fa-trash"></button>
                </form>

                <td>
                    <a href="contacts/{{$contact->id}}/edit"><button class="button-fa fa fa-edit"></button></a>
                </td>
            </tr>
        @endforeach
    </table>