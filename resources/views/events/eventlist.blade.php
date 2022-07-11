<?php

use Carbon\Carbon;

?>

<h1>List of events</h1>
<ul>
  @foreach ($events as $event)
  <a href="{{route('events.show', $event->id)}}">    <li>{{Carbon::parse($event->start_date)->format('d.m')}} {{$event->title_en}}</li></a>
      
  @endforeach
</ul>



