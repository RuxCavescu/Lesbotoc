<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{mix("/css/app.css")}}">
  {{-- / the below imports icons from bootstrap --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  {{-- <link rel="stylesheet" href="/css/contacts.css">  --}}


  <title>Document</title>
</head>
<body>
  @include('layouts/navbar')
  @yield('content')

  {{-- <script> 
      console.log('works');
      const navbar = document.querySelector(".navbar");

      // Get all buttons with class="link" inside the navbar
      let links = navbar.querySelectorAll(".link");

      // Loop through the links and add the active class to the current/clicked button

      for (let i = 0; i < links.length; i++) {
          links[i].addEventListener("click", function (e) {
              let current = document.querySelector(".link-active");
              if (current) {
                  // add/remove class names:
                  current.classList.remove("link-active");
              }
              e.target.classList.add("link-active");
          });
      }
 </script> --}}
</body>
</html>