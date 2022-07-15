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

</body>
</html>