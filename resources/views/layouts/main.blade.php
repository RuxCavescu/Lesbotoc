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

  
  <script>
    // Get the modal
      var modal = document.getElementById("myModal");
      console.log(modal)

    // Get the button that opens the modal
        var btn = document.querySelector(".events__participants");
      console.log(btn)

    // Get the button that opens the modal - subscribers
        var btnSub = document.querySelector(".contacts__subscriptions");
      console.log(btnSub)

    // Get the <span> element that closes the modal

      const close = document.querySelector(".modal__close")
    // var close = document.getElementsByClassName("modal__close")[0];
      console.log(close)

    // When the user clicks on the button, open the modal

      btn.addEventListener("click", () => {
        modal.style.display = "block";
      })


    // When the user clicks on <span> (x), close the modal

      close.addEventListener("click", () => {
        modal.style.display = "none";
      })

      // сlose.addEventListener("click", () => {
      //     // modal.style.display = "none";
      //     console.log("click")
      // })


      // When the user clicks anywhere outside of the modal, close it

      window.addEventListener("click", (event) => {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      })
  </script>
</body>
</html>