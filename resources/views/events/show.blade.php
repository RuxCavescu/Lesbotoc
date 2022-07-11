

@extends('layouts/main')
<h1>View event details (not edaitable)</h1>

@section('content')



<form action="" method="">
  {{-- CZE TITLE --}}
  <label for="title_cz">CZE Title:</label>
  <input
      type="text"
      id="title_cz"
      name="title_cz"
      value="{{ old('title_cz', $event->title_cz) }}"
      disabled="disabled"
  ><br><br>
  {{-- ENG TITLE --}}
  <label for="title_en">EN Title:</label>
  <input
      type="text"
      id="title_en"
      name="title_en"
      value="{{ old('title_cz', $event->title_en) }}"
      disabled="disabled"
  ><br><br>
  {{-- START DATE --}}
  <label for="start_date">Start date:</label>
  <input
      type="date"
      id="start_date"
      name="start_date"
      value="{{ old('start_date', $event->start_date) }}"
      disabled="disabled"
  ><br><br>
  {{-- START TIME --}}
  <label for="time">Start time:</label>
  <input
      type="time"
      id="time"
      name="time"
      value="{{ old('time', $event->time) }}"
      disabled="disabled"
  ><br><br>
  {{-- END DATE --}}
  <label for="end_date">End date:</label>
  <input
      type="date"
      id="end_date"
      name="end_date"
      value="{{ old('end_date', $event->end_date) }}"
      disabled="disabled"
  ><br><br>
  {{-- LOCATION --}}
  <label for="location">Location:</label>
  <select name="location" id="location" disabled="disabled">
    <option value=>{{$event->location->name}}</option>
  </select>
<br><br>

{{-- CATEGORIES --}}
<label for="category">Category :</label>
<select name="category" id="category" disabled="disabled">
    <option value=>{{$event->category->name_en}}</option>
</select>
<br><br>


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
      disabled="disabled"
  ><label for="paid_yes">Yes</label>
  
  <input
      id="paid_no"  
      type="radio"
      name="is_paid"
      value="0"
      @if ($event->is_paid === 0)
      checked
      @endif
      disabled="disabled"
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
      disabled="disabled"
  ><br><br>
  {{-- CAPACITY --}}
  <label for="capacity">Capacity: </label>
  <input
      id="capacity"  
      type="number"
      min="1"
      name="capacity"
      value="{{ old('capacity', $event->capacity) }}"
      disabled="disabled"
  ><br><br>
  {{-- QR code URL --}}
  <label for="qr_code_image">QR code URL: </label>
  <input
      id="qr_code_image"  
      type="text"
      name="qr_code_image"
      value="{{ old('qr_code_image', $event->qr_code_image) }}"
      disabled="disabled"
  ><br><br>
  {{-- CZE DESCRIPTION --}}
  <label for="descriprion_cz">CZ description: </label>
  <input
      id="descriprion_cz"  
      type="text"
      name="descriprion_cz"
      value="{{ old('descriprion_cz', $event->descriprion_cz) }}"
      disabled="disabled"
  ><br><br>
  {{-- ENG DESCRIPTION --}}
  <label for="descriprion_en">EN description: </label>
  <input
      id="descriprion_en"  
      type="text"
      name="descriprion_en"
      value="{{ old('descriprion_en', $event->descriprion_en) }}"
      disabled="disabled"
  ><br><br>
  {{-- CZE INSTRUCTIONS --}}
  <label for="instructions_cz">CZ instructions: </label>
  <input
      id="instructions_cz"  
      type="text"
      name="instructions_cz"
      value="{{ old('instructions_cz', $event->instructions_cz) }}"
      disabled="disabled"
  ><br><br>
  {{-- ENG DESCRIPTION --}}
  <label for="instructions_en">EN instructions: </label>
  <input
      id="instructions_en"  
      type="text"
      name="instructions_en"
      value="{{ old('instructions_en', $event->instructions_en) }}"
      disabled="disabled"
  ><br><br>
  {{-- IS PHONE REQUIRED --}}
  <label>Is phone required for registration?</label>
  
  <input
      id="phone_yes"  
      type="radio"
      name="is_phone_required"
      value="1"
      disabled="disabled"
      
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
      disabled="disabled"
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
      disabled="disabled"
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
      disabled="disabled"
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
      disabled="disabled"
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
      disabled="disabled"
  ><label for="featured_no">No</label>
  <br><br>
  <a href="{{route("events.edit", $event->id)}}">Edit</a>
  
 
  


  {{-- <button type="submit">Submit</button> --}}

  {{-- <form action="{{route("books.update", $book->id)}}"   --}}

</form>


    





    
@endsection
