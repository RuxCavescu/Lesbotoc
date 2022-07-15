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


  <title>Lesbotoc</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
</head>
<body>
  @include('layouts/navbar')
  @yield('content')
  @include('layouts/footer')

  
  <script>
    // Get the modal
      var modal = document.querySelector(".myModal");
      console.log(modal)

    // Get the button that opens the modal
        var btn = document.querySelector(".modal_btn");

    // Get the <span> element that closes the modal

      const close = document.querySelector(".modal__close")

    // When the user clicks on the button, open the modal

      btn.addEventListener("click", () => {
        console.log('works');
        modal.style.display = "block";
      })


    // When the user clicks on <span> (x), close the modal

      close.addEventListener("click", () => {
        modal.style.display = "none";
      })

      // When the user clicks anywhere outside of the modal, close it

      window.addEventListener("click", (event) => {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      })
  </script>
</body>
</html>