@if (count($errors) > 0)
    <div class="errors">
        @foreach ($errors->all() as $error)
            <div class="error__message">{{$error}}</div>
        @endforeach
    </div>
@endif
    
@if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
@endif