<?php

use Carbon\Carbon;

?>

@extends('layouts/main')

@section('content')
<h1>List of events</h1>
<ul>
  @foreach ($events as $event)
    <li>{{Carbon::parse($event->start_date)->format('d.m')}} {{$event->title_en}}</li>
      
  @endforeach
</ul>
    
@endsection
