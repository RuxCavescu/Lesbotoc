@if (count($errors) > 0)
    <div class="errors">
        @foreach ($errors->all() as $error)
            <div class="error">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <div class="error__message">{{$error}}</div>
            </div>
        @endforeach
    </div>
@endif
    
@if(Session::has('success_message'))
    <div class="alert alert-success">
    <span class="checkmark">
        <div class="checkmark_circle"></div>
        <div class="checkmark_stem"></div>
        <div class="checkmark_kick"></div>
    </span>
    {{ Session::get('success_message') }}
    </div>
@endif