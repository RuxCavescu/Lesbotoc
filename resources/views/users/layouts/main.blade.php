<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{mix("/css/users-app.css")}}">
  {{-- / the below imports icons from bootstrap --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  {{-- <link rel="stylesheet" href="/css/contacts.css">  --}}
  <title>Lesbotoc</title>
</head>
<body>

  @yield('content')
  @include('users/layouts/footer')

{{-- <script>

        const navbar = document.querySelector(".users__navbar");
        // Loop through the links and add the active class to the current/clicked button
        console.log(navbar);

        window.addEventListener("load", () => {

            const location_path = window.location.pathname
            const path = location_path.slice(location_path.lastIndexOf('/'))
            
            // Get all buttons with class="link" inside the navbar
            const links = window.querySelectorAll(".users__navbar .link");

            for (var i = 0; i < links.length; i++) {

                const link = links[i]
                const hrefAttr = link.href
                const hrefTrigger = hrefAttr.slice(hrefAttr.lastIndexOf('/'))

                if (hrefTrigger === path ) {
                    link.classList.add('link-active')
                }

                // console.log(path, hrefTrigger)
            
            }
            
        })
        
    </script> --}}
</body>
</html>