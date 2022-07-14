<div class="admin__bar"><h1 class="admin__title">Contacts Administration</h1></div>

        <form class="create__contact" action="{{route("save-contact")}}" method="POST">
            @csrf
            <h2 class="create__contact-title"> Add a new contact: </h2>
            @include('contacts/messages')
            <tr class="create__contact-row">
            <div class="create__contact-inputs">
                <input class="create__contact-input" type="text" name="name" value="{{$contact->name}}" placeholder="Name"> 
                <input class="create__contact-input" type="text" name="email" value="{{$contact->email}}" placeholder="Email">
                <input class="create__contact-input" type="text" name="phone" value="{{$contact->phone}}" placeholder="Phone">
            </div>
                 <div class="create__contact-radioBtn">
                     <p>Is the Contact subscribed?</p>
                     <div class="create__contact-radio">
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
                 </div>
                <div class="create__contact-buttons">
                    <button class="create__contact-save">Save</button>
                    <button class="create__contact-cancel"><a href="javascript:history.back()">Cancel</a></button>
                </div>
                {{-- <td><a href="contacts/{{$contact->id}}/edit"><i class="fa fa-edit"></a></td> --}}
            </tr>
        </form>