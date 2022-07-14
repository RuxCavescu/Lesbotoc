@extends('layouts/main')

@section('content')
        <div class="admin__bar"><h1 class="admin__title">Admin Homepage</h1></div>


@include('auth/register')

<?php 
auth()->check()

?>


@endsection


