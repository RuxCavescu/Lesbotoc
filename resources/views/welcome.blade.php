<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lesbotoc</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700&display=swap" rel="stylesheet">
        

<div class="App">
<div id="root"></div>


</div>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
       <button><a href="admin/events">Events</button>
       <button><a href="admin/contacts">Contacts</button>
       <button><a href="admin/locations">Locations</button>
       <button><a href="admin/events/1/edit">Edit first event</button>
       <button><a href="admin/contacts/1/edit">Edit first contact</button>
    </body>
</html>
