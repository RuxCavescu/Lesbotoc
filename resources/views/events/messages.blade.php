@if (Session::has("success"))
<div class="success">
    {{Session::get("success")}}
</div>

@endif @if (count($errors) > 0)
<div class="errors">
    @foreach ($errors->all() as $error)
    <div class="error__message">{{ $error }}</div>
    @endforeach
</div>
@endif
