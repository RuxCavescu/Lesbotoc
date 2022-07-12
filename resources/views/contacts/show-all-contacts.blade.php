    <table>
            <tr class="contacts__columns">
                <td>Name</td>
                <td>Email</td>
                <td>Phone Number</td>
            </tr>
        @foreach ($contacts as $contact)
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

                <td>
                    <button class="fa fa-edit">
                        <a href="contacts/{{$contact->id}}/edit"></a>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
