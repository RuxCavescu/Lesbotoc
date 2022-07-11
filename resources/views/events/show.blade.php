

@extends('layouts/main')

@section('content')

<form action="" method="post">

    @csrf
    {{-- CZE TITLE --}}
    <label for="title_cz">CZE Title:</label>
    <input
        type="text"
        id="title_cz"
        name="title_cz"
        value="{{ old('title_cz', $event->title_cz) }}"
    ><br><br>
    {{-- ENG TITLE --}}
    <label for="title_en">EN Title:</label>
    <input
        type="text"
        id="title_en"
        name="title_en"
        value="{{ old('title_cz', $event->title_en) }}"
    ><br><br>
    {{-- START DATE --}}
    <label for="start_date">Start date:</label>
    <input
        type="date"
        id="start_date"
        name="start_date"
        value="{{ old('start_date', $event->start_date) }}"
    ><br><br>
    {{-- START TIME --}}
    <label for="time">Start time:</label>
    <input
        type="time"
        id="time"
        name="time"
        value="{{ old('time', $event->time) }}"
    ><br><br>
    {{-- END DATE --}}
    <label for="edn_date">End date:</label>
    <input
        type="date"
        id="end_date"
        name="end_date"
        value="{{ old('end_date', $event->end_date) }}"
    ><br><br>

    {{-- PAID EVENT? --}}
    <label>Paid event?</label>
    <input
        id="paid_yes"  
        type="radio"
        name="is_paid"
        value="1"
        @if ($event->is_paid === 1)
        checked
        @endif
    ><label for="paid_yes">Yes</label>
    
    <input
        id="paid_no"  
        type="radio"
        name="is_paid"
        value="0"
        @if ($event->is_paid === 0)
        checked
        @endif
    ><label for="paid_no">No</label>
    <br><br>
    
    {{-- PRICE --}}
    <label for="price">Price: </label>
    <input
        id="price"  
        type="number"
        min="1"
        name="price"
        value="{{ old('price', $event->price) }}"
    ><br><br>
    {{-- CAPACITY --}}
    <label for="capacity">Capacity: </label>
    <input
        id="capacity"  
        type="number"
        min="1"
        name="capacity"
        value="{{ old('capacity', $event->capacity) }}"
    ><br><br>
    {{-- QR code URL --}}
    <label for="qr_code_image">QR code URL: </label>
    <input
        id="qr_code_image"  
        type="text"
        name="qr_code_image"
        value="{{ old('qr_code_image', $event->qr_code_image) }}"
    ><br><br>
    {{-- CZE DESCRIPTION --}}
    <label for="descriprion_cz">CZ description: </label>
    <input
        id="descriprion_cz"  
        type="text"
        name="descriprion_cz"
        value="{{ old('descriprion_cz', $event->descriprion_cz) }}"
    ><br><br>
    {{-- ENG DESCRIPTION --}}
    <label for="descriprion_en">EN description: </label>
    <input
        id="descriprion_en"  
        type="text"
        name="descriprion_en"
        value="{{ old('descriprion_en', $event->descriprion_en) }}"
    ><br><br>
    {{-- CZE INSTRUCTIONS --}}
    <label for="instructions_cz">CZ instructions: </label>
    <input
        id="instructions_cz"  
        type="text"
        name="instructions_cz"
        value="{{ old('instructions_cz', $event->instructions_cz) }}"
    ><br><br>
    {{-- ENG DESCRIPTION --}}
    <label for="instructions_en">EN instructions: </label>
    <input
        id="instructions_en"  
        type="text"
        name="instructions_en"
        value="{{ old('instructions_en', $event->instructions_en) }}"
    ><br><br>
    {{-- IS PHONE REQUIRED --}}
    <label>Is phone required for registration?</label>
    
    <input
        id="phone_yes"  
        type="radio"
        name="is_phone_required"
        value="1"
        
        @if ($event->is_phone_required === 1)
        checked
        @endif
        {{-- checked={{$event->is_phone_required === 1 ? "true" : "false"}} --}}


    ><label for="phone_yes">Yes</label>
    
    <input
        id="phone_no"  
        type="radio"
        name="is_phone_required"
        value="0"
        @if ($event->is_phone_required === 0)
        checked
        @endif
    ><label for="phone_no">No</label>
    <br><br>

    {{-- IS RECURRING? --}}
    <label>Is recurring?</label>
    
    <input
        id="recurring_yes"  
        type="radio"
        name="is_recurring"
        value="1"
        
        @if ($event->is_recurring === 1)
        checked
        @endif
        {{-- checked={{$event->is_phone_required === 1 ? "true" : "false"}} --}}
    ><label for="recurring_yes">Yes</label>
    
    <input
        id="recurring_no"  
        type="radio"
        name="is_recurring"
        value="0"
        @if ($event->is_recurring === 0)
        checked
        @endif
    ><label for="recurring_no">No</label>
    <br><br>

    {{-- IS FEATURED--}}
    <label>Is featured?</label>
    
    <input
        id="featured_yes"  
        type="radio"
        name="is_featured"
        value="1"
        
        @if ($event->is_featured === 1)
        checked
        @endif
        {{-- checked={{$event->is_phone_required === 1 ? "true" : "false"}} --}}


    ><label for="featured_yes">Yes</label>
    
    <input
        id="featured_no"  
        type="radio"
        name="is_featured"
        value="0"
        @if ($event->is_featured === 0)
        checked
        @endif
    ><label for="featured_no">No</label>
    <br><br>
    {{-- <button type="submit">Submit</button> --}}

  </form>





    
@endsection
