@extends('users/layouts/main')

@section('content')
    {{-- <h1 style="color: black;">User View React App</h1> --}}
    {{-- the id root element is where the React application will be rendered, go to file 'users-homepage.js - entry file for the Missions React app' to see this is selected and the <App /> is rendered--}}
    <div id="root"></div>
    {{-- // the below ensures the React application is loaded. we need to go into the webpack mix file and add there the correct command--}}
    <script src="{{ mix('js/user-view-react.js') }}"></script>
@endsection