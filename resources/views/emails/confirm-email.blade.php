<div class="container" style="padding: 1rem; background: #f5f5f5;">
  <p>Hi, {{$details["contact_name"]}}</p>
  <p>
      This you for your registration for {{$details["event_title"]}} on {{$details["start_date"]}}!
      In order to confirm your registration, please follow this <a href='{{route("registration.confirmation", $details["registration_token"])}}'>link</a>.
  </p>
  <p>If you changed your mind and decided not to participate, you can cancel your registration by clicking this <a href='{{route("registration.deletion", $details["registration_token"])}}'>link</a>.</p>

  <p>See you soon!</p>

  <p>
    Best regards, <br>
    Lesbotoč
  </p>
</div>