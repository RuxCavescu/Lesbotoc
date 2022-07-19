{{-- <div class="container" style="padding: 1rem; background: #f5f5f5;">
  <p>Hi, {{$details["contact_name"]}}</p>
  <p>
      Thank you for your registration for {{$details["event_title"]}} on {{$details["start_date"]}}!
      In order to confirm your registration, please follow this <a href='{{route("registration.confirmation", $details["registration_token"])}}'>link</a>.
  </p>
  <p>If you changed your mind and decided not to participate, you can cancel your registration by clicking this <a href='{{route("registration.deletion", $details["registration_token"])}}'>link</a>.</p>



  <p>See you soon!</p>

  <p>
    Best regards, <br>
    Lesbotoč
  </p>
</div> --}}

<?php 
$details = [
        "contact_name" => "Ekaterina Melnichuk",
        "contact_email" => "katerinka.melnichuk@gmail.com",
        "contact_id" => 72,
        "event_title" => "Book club",
        "start_date" => "21.03.2022",
        "registration_token" => "blablabla",
        "is_subscribed" => true
      ];

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <style>
    table, td, div, h1, p {font-family: 'Inter', sans-serif;}
  </style>
</head>
<body style="margin:0;padding:0; font-family: 'Inter';">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <td align="center" style="padding:40px 0 30px 0;background:#142566;">
              <img src="/images/logo_white.png" alt="" width="200" style="height:auto;display:block;" />
              <h1 style="color: white;">Welcome, Ekaterina!</h1>
            </td>
          </tr>
          <tr>
            <td style="padding:36px 30px 42px 30px;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                <tr>
                  <td style="padding:0 0 0px 0;color:#153643;">
                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Inter,sans-serif;">Thank you for registration!</h1>
                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif;">You were registered for {{$details["event_title"]}} on {{$details["start_date"]}}</p>

                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif;">In order to confirm your registration, please follow this <a style="color:#7ab6cc;text-decoration:underline;" href='{{route("registration.confirmation", $details["registration_token"])}}'>link</a>.</p>

                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif;">If you changed your mind and decided not to participate, you can cancel your registration by clicking this <a style="color:#7ab6cc;text-decoration:underline;" href='{{route("registration.deletion", $details["registration_token"])}}'>link</a>.</p>

                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif;">We are looking forward to seeing you! See you soon.</p>

                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif;">
                      Best regards, <br>
                      Lesbotoč
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="padding:0;">
                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:#7ab6cc;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                <tr>
                  <td style="padding:0;width:50%;" align="left">


                    @if ($details["is_subscribed"] == true )

                    <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                      &reg; Lesbotoč 2022<br/><a href='{{route("contact.unsubscribe", $details["contact_id"])}}' style="color:#ffffff;text-decoration:underline;">Unsubscribe</a>
                    </p>

                    @endif




                  </td>
                  <td style="padding:0;width:50%;" align="right">
                    <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                      <tr>
                        <td style="padding:0 0 0 10px;width:38px;">
                          <a href="https://www.instagram.com/lesbotoc/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 0 0 10px;width:38px;">
                          <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 0 0 10px;width:38px;">
                          <a href="https://www.facebook.com/seznamsenatoci" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>