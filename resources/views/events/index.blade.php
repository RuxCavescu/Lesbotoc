
@extends('layouts/main')

@section('content')

@include('events/adminbar')

<div class="events">

  <div class="events__intro">
<h2>You can create, edit, delete events here.</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea provident expedita vitae error atque nobis iste tempore cumque unde placeat dolorem et, aspernatur eos repudiandae, fugit alias facere laudantium ad.</p>
</div>

  <div class="events__main">
  @include('events/eventlist')
  @include('events/form')
</div>
</div>

  

@endsection

