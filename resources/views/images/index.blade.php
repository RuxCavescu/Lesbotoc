@extends('layouts/main')

@section('content')
<div class="admin__bar"><h1 class="admin__title">Images Administration</h1></div>

@include('images/add-image-form')
@include('images/show-all-images')
    
@endsection
