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

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif