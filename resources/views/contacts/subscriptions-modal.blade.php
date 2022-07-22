<div class="modal myModal">

  <!-- Modal content -->
  <div class="modal__content">
    <div class="modal__title">
      <h1>Subscribed contacts:</h1>
      <span class="modal__close">&times;</span>
    </div>

    <button class="button download-btn"><i class="fa fa-cloud-download" aria-hidden="true"></i>
        <a href="{{route("contacts-export")}}">
            <div class="button__text">Download data</div>
        </a>
    </button>
    
    <table class="modal__table">
            <tr class="contacts__columns">
                <td>Name</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
        @foreach ($subscribedContacts as $contact)
            <tr class="contact__row">
                <td class="contact__columns-name"> {{$contact->name}} </td>
                <td class="contact__columns-email"> {{$contact->email}} </td>
                <td class="contact__columns-phone"> {{$contact->phone ? $contact->phone : '-'}} </td>   
                                <td>
                    <a href="contacts/{{$contact->id}}/edit"><button class="button-fa fa fa-edit"></button></a>
                </td>
                <td>        
                <form action="{{ route('delete-contact', ['id' => $contact->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="button-fa fa fa-trash"></button>
                </form>
            </tr>
        @endforeach
    </table>

  </div>

</div>