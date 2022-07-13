<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal__content">
    <div class="modal__title">
      <h1>Participants</h1>
      <span class="modal__close">&times;</span>
    </div>

    @if (count($registrations) > 0)
    {{-- @dump($registrations) --}}
    <table class="modal__table">
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      @foreach ($registrations as $registration)
      <tr>
        <td>{{$registration->contact->name}}</td>
        <td>{{$registration->contact->email}}</td>
      </tr>
      @endforeach
    </table>
    <a href="{{route('events.export', $event->id)}}" class="modal__button">Download xls</a>
    @else
    <p class="modal__info">No registations for this event were made so far.</p>


    @endif

  </div>

</div>