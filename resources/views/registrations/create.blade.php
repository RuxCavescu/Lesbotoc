<h1>Create a new registration (test)</h1>

@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<p style="color: red">{{$error}}</p>
@endforeach
@endif

<form action="{{route('registration.store')}}" method="POST">
  @csrf

  Event id: <input type="number" name="event_id" value={{old("event_id")}}>
  Contact id: <input type="number" name="contact_id" value={{old("contact_id")}}>
  Auth token: <input type="text" name="auth_token" value={{old("auth_token")}}>
  Is confirmed: <input type="number" name="is_confirmed" value={{old("is_confirmed")}}>

  <button>Submit</button>



</form>