
@if ($event->id)
<h1>Edit an existing event </h1>
<form action="{{route("events.update", $event->id)}}" method="POST">
  @csrf
  @method("PATCH")
@else 
<h1>CREATE a new event</h1>
<form action="{{route("events.store")}}" method="POST">
  @csrf
@endif

@include('events/messages')



  <fieldset 
    @if (Request::path() === "admin/events/" . $event->id)
    disabled
    @endif
  > 



  {{-- CZE TITLE --}}
  <label for="title_cz">CZE Title:</label>
  <input
      type="text"
      id="title_cz"
      name="title_cz"
      value="{{ old('title_cz', $event->title_cz) }}"
  ><br><br>
  {{-- ENG TITLE --}}
  <label for="title_en">EN Title *:</label>
  <input
      type="text"
      id="title_en"
      name="title_en"
      value="{{ old('title_en', $event->title_en) }}"
      required
  ><br><br>

  {{-- START DATE --}}
  <label for="start_date">Start date *:</label>
  <input
      type="date"
      id="start_date"
      name="start_date"
      value="{{ old('start_date', $event->start_date) }}"
      required
  {{-- START TIME --}}
  <label for="time">Start time:</label>
  <input
      type="time"
      id="time"
      name="time"
      value="{{ old('time', $event->time) }}"
  ><br><br>
  {{-- END DATE --}}
  <label for="end_date">End date:</label>
  <input
      type="date"
      id="end_date"
      name="end_date"
      value="{{ old('end_date', $event->end_date) }}"
  ><br><br>

{{-- LOCATION --}}
    <label for="location">Location *:</label>
    <select name="location_id" id="location" required>

    @if ($event->id && $event->location_id)
    <option disabled="disabled">Select location</option>
      @foreach ($locations as $location)
         @if ($location->name === $event->location->name)
      <option value={{$location->id}} selected>{{$location->name}}: {{$location->address}}</option>
          @else 
    <option value={{$location->id}}>{{$location->name}}: {{$location->address}}</option>
         @endif
      @endforeach
    
    @else 
       <option selected disabled="disabled">Select location</option>
       @foreach ($locations as $location) 
       <option value={{$location->id}}>{{$location->name}}: {{$location->address}}</option>
      @endforeach  
    @endif


  </select>
  <br><br>

{{-- CATEGORIES --}}

<label for="category">Category :</label>
    <select name="category_id" id="category">

@if ($event->id && $event->category_id)
    <option disabled="disabled">Select location</option> 
    @foreach ($categories as $category)
     @if ($category->name_en === $event->category->name_en)
      <option value={{$category->id}} selected>{{$category->name_en}}</option>
      @else
      <option value={{$category->id}}>{{$category->name_en}}</option>
     @endif
    @endforeach



@else 
   <option selected disabled="disabled">Select category</option>
   @foreach ($categories as $category) 
   <option value={{$category->id}}>{{$category->name_en}}</option>
  @endforeach  
@endif

</select>
<br><br>



  {{-- CZE DESCRIPTION --}}
  <label for="description_cz">CZ description: </label>
  <textarea id="description_cz" name="description_cz" >{{ old('description_cz', $event->descriprion_cz) }}</textarea><br><br>

  {{-- ENG DESCRIPTION --}}
  <label for="description_en">EN description *: </label>
  <textarea id="description_en" name="description_en" required>{{ old('description_en', $event->description_en) }}</textarea><br><br>

  {{-- CZE INSTRUCTIONS --}}
  <label for="instructions_cz">CZ instructions: </label>
  <textarea id="instructions_cz" name="instructions_cz" >{{ old('instructions_cz', $event->instructions_cz) }}</textarea><br><br>

  {{-- ENG INSTRUCTIONS --}}
  <label for="instructions_en">EN instructions *: </label>
  <textarea id="instructions_en" name="instructions_en" required>{{ old('instructions_en', $event->instructions_en) }}</textarea><br><br>

    {{-- PAID EVENT? --}}
    <label>Paid event *?</label>
    <input
        id="paid_yes"  
        type="radio"
        name="is_paid"
        value="1"
        required
  
        @if ($event->id && $event->is_paid === 1)
          checked
        @endif
  
  
    ><label for="paid_yes">Yes</label>
    
    <input
        id="paid_no"  
        type="radio"
        name="is_paid"
        value="0"
        @if ($event->id && $event->is_paid === 0)
          checked
        @elseif (!$event->id)
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

  {{-- IS PHONE REQUIRED --}}
  <label>Is phone required for registration? *</label>
  
  <input
      id="phone_yes"  
      type="radio"
      name="is_phone_required"
      value="1"
      
      @if ($event->id && $event->is_phone_required === 1)
        checked
      @endif



  ><label for="phone_yes">Yes</label>
  
  <input
      id="phone_no"  
      type="radio"
      name="is_phone_required"
      value="0"
      @if ($event->id && $event->is_phone_required === 0)
        checked
      @elseif (!$event->id)
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
      
      @if ($event->id && $event->is_recurring === 1)
        checked
      @endif
  ><label for="recurring_yes">Yes</label>
  
  <input
      id="recurring_no"  
      type="radio"
      name="is_recurring"
      value="0"
      @if ($event->id && $event->is_recurring === 0)
        checked
      @elseif (!$event->id)
        checked
      @endif
  ><label for="recurring_no">No</label>
  <br><br>

  {{-- IS FEATURED--}}
  <label>Is featured? *</label>
  
  <input
      id="featured_yes"  
      type="radio"
      name="is_featured"
      value="1"
      
      @if ($event->id && $event->is_featured === 1)
        checked
      @endif
      {{-- checked={{$event->is_phone_required === 1 ? "true" : "false"}} --}}


  ><label for="featured_yes">Yes</label>
  
  <input
      id="featured_no"  
      type="radio"
      name="is_featured"
      value="0"
      @if ($event->id && $event->is_featured === 0)
        checked
      @elseif (!$event->id)
        checked
      @endif
  ><label for="featured_no">No</label>
  <br><br>

</fieldset>


  @if (Request::path() === "admin/events/" . $event->id . "/edit" || Request::path() === "admin/events")
  <button type="submit">Save</button>
  @endif



</form>


@if (Request::path() === "admin/events/" . $event->id)
<a href="{{route("events.edit", $event->id)}}"><button>Edit</button></a>
<a href="{{url()->previous()}}"><button>Back</button></a>
@elseif (Request::path() === "admin/events/" . $event->id . "/edit")
<a href="{{url()->previous()}}"><button>Back</button></a>
@endif








@if ($event->id)
<form action="{{route("events.destroy", $event->id)}}" method="POST">
  @method("DELETE")
  @csrf

  <button type="submit">Delete</button>
</form>
@endif