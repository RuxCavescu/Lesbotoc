<?php

use Carbon\Carbon;

?>

<ul class="events__list">
  @foreach ($events as $event)

  <li @if ($event->start_date > date("Y-m-d"))
    class="events__item"
    @else
    class="events__item events__item--grey"
    @endif
    ><a class="events__link"
      href="{{route('events.show', $event->id)}}">{{Carbon::parse($event->start_date)->format('d.m.Y')}} -
      {{$event->title_en}}</a></li>




  @endforeach
</ul>