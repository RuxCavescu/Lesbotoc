

@extends('layouts/main')
<h1>View event details (not edaitable)</h1>

@section('content')


<div class="events">
  @include('events/eventlist')
  @include('events/form')
  </div>








    
@endsection
