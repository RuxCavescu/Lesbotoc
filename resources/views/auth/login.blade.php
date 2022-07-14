
@extends('layouts/main')

@section('content')




<div class="login">
<h2 class="login__title">Login</h2>
<p class="login__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea provident expedita vitae error atque nobis iste tempore cumque unde placeat dolorem et, aspernatur eos repudiandae, fugit alias facere laudantium ad.</p>



<form class="login__form" action="{{ route('login') }}" method="post">

  @if (Session::has("success"))
  <div class="events__success">
      {{Session::get("success")}}
  </div>
  @endif 
 
  @csrf

  <label class="events__label" for="email">Enter your email</label>

  <input class="events__input" type="email" name="email" value="{{ old('email') }}">
  @error('email')
  <div class="events__message">{{ $message }}</div >
  @enderror

  <label class="events__label" for="password">Enter your password</label>

  <input class="events__input" type="password" name="password" value="">
  @error('password')
  <div class="events__message">{{ $message }}</div >
  @enderror

  <button class="button login__button" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>
    <div class="button__text">Login</div>
  </button>

</form>


</div>

  

@endsection


