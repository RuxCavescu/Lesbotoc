<div class="admin__bar"><h1 class="admin__title">Contacts Administration</h1></div>

    <form class="edit__contact" action="{{ route('update-contact', ['id' => $contact->id]) }}" method="post">
        @csrf
            <h2 class="edit__contact-title"> Edit th contact: </h2>
            @include('contacts/messages')
            <tr class="edit__contact-row">
            <div class="edit__contact-inputs">
                <input class="edit__contact-input" type='text' name='name' value='{{$contact->name}}' placeholder="Name" >
                <input class="edit__contact-input" type='email' name='email' value='{{$contact->email}}' placeholder="Email" >
                <input class="edit__contact-input" type='tel' name='phone' value='{{$contact->phone}}' placeholder="Phone" >
            </div>

                 <div class="edit__contact-radioBtn">
                     <p>Is the Contact subscribed?</p>
                     <div class="edit__contact-radio">
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
                <div class="edit__contact-buttons">
                    <button class="edit__contact-save">Save</button>
                    <a class="edit__contact-cancel" href="javascript:history.back()">Cancel</a>
                </div>
                {{-- <td><a href="contacts/{{$contact->id}}/edit"><i class="fa fa-edit"></a></td> --}}
            </tr>
        </form>