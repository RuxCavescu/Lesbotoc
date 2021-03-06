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




<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <script src="https://kit.fontawesome.com/5f0205c008.js" crossorigin="anonymous"></script> 
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
              <img src="https://lesbotoc.codeboot.cz/images/logo_white.png" alt="" width="200" style="height:auto;display:block;" />
              <h1 style="color: white;">Welcome, {{$details["contact_name"]}}!</h1>
            </td>
          </tr>
          <tr>
            <td style="padding:36px 30px 42px 30px; display:flex; gap: 3em;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                <tr>
                  <td style="padding:0 0 0px 0;color:#153643;">
                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Inter,sans-serif;">Thank you for registration!</h1>
                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif; text-align: justify;">You were registered for {{$details["event_title"]}} on {{$details["start_date"]}}. In order to confirm your registration, please follow this <a style="color:#7ab6cc;text-decoration:underline;" href='{{route("registration.confirmation", $details["registration_token"])}}'>link</a>.</p>

                    @if ($details["qr_url"] == true)
                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif; text-align: justify;">Make sure to send your payment for the event before due date.</p>
                    @endif

                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif; text-align: justify; color: black;">If you changed your mind and decided not to participate, you can cancel your registration by clicking this <a style="color:#7ab6cc;text-decoration:underline;" href='{{route("registration.deletion", $details["registration_token"])}}'>link</a>.</p>


                    

                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Inter,sans-serif; text-align: justify;">We are looking forward to seeing you!</p>

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
              
@if ($details["qr_url"] == true)
<div style="padding-top: 2.4em;">
  <img src={{$details["qr_url"]}} alt="QR code for payment" style="width:200px; height: 200px; " >
</div>
@endif
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
                          <a href="https://www.instagram.com/lesbotoc/" style="color:#ffffff;"><img src="https://lesbotoc.codeboot.cz/images/instagram.png" alt="Instagram" width="38" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 0 0 10px;width:38px;">
                          <a href="https://www.facebook.com/seznamsenatoci" style="color:#ffffff;"><img src="https://lesbotoc.codeboot.cz/images/facebook.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
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