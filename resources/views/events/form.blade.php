
@if ($event->id)

<form class="event__form" action="{{route("events.update", $event->id)}}" method="POST">
  @csrf
  @method("PATCH")
  {{-- <h1 class="event__title">Edit an existing event </h1> --}}
@else 

<form class="events__form" action="{{route("events.store")}}" method="POST">
  @csrf
@endif
{{-- <h1 class="events__title">CREATE a new event</h1> --}}

@include('events/messages')


{{-- Disable form from editing if user comes to URL as admin/events/if --}}
  <fieldset class="events__fieldset"
    @if (Request::path() === "admin/events/" . $event->id)
    disabled
    @endif
  > 


    {{-- ENG TITLE --}}
    <div class="events__lang">
      <label class="events__label" for="title_en">Title in English *</label>
      <input
      class="events__input events__input--half"
          type="text"
          id="title_en"
          name="title_en"
          value="{{ old('title_en', $event->title_en) }}"
          required
      >
          {{-- ENG DESCRIPTION --}}
      <label class="events__label" for="description_en">Description in English *</label>
      <textarea class="events__textarea events__textarea--half" id="description_en" name="description_en" required>{{ old('description_en', $event->description_en) }}</textarea>
  
         {{-- ENG INSTRUCTIONS --}}
         <label class="events__label" for="instructions_en">Instructions in English * </label>
         <textarea class="events__textarea events__textarea--half" id="instructions_en" name="instructions_en" required>{{ old('instructions_en', $event->instructions_en) }}</textarea>
    </div>



  {{-- CZE TITLE --}}
  <div class="events__lang">
  <label class="events__label" for="title_cz">Title in Czech </label>
  <input
  class="events__input"
      type="text"
      id="title_cz"
      name="title_cz"
      value="{{ old('title_cz', $event->title_cz) }}"
  >

    {{-- CZE DESCRIPTION --}}
    <label class="events__label" for="description_cz">Description in Czech</label>
    <textarea class="events__textarea events__textarea--half" id="description_cz" name="description_cz" >{{ old('description_cz', $event->description_cz) }}</textarea>
  

  
    {{-- CZE INSTRUCTIONS --}}
    <label class="events__label" for="instructions_cz">Instructions in Czech</label>
    <textarea class="events__textarea events__textarea--half" id="instructions_cz" name="instructions_cz" >{{ old('instructions_cz', $event->instructions_cz) }}</textarea>
  
  </div>
 

  <div class="events__common">
  {{-- START DATE --}}
  <label class="events__label events__label--half" for="start_date">Start date *
  <input
  class="events__input"
      type="date"
      id="start_date"
      name="start_date"
      value="{{ old('start_date', $event->start_date) }}"
      required
      ></label>
  {{-- START TIME --}}
  <label class="events__label events__label--half" for="time">Start time
  <input
  class="events__input"
      type="time"
      id="time"
      name="time"
      value="{{ old('time', $event->time) }}"
  ></label>
  {{-- END DATE --}}
  <label class="events__label events__label--half" for="end_date">End date
  <input
  class="events__input"
      type="date"
      id="end_date"
      name="end_date"
      value="{{ old('end_date', $event->end_date) }}"
  ></label>

{{-- LOCATION --}}
    <label class="events__label events__label--half" for="location">Location *
    <select class="events__input" name="location_id" id="location" required>

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


  </select></label>


{{-- CATEGORIES --}}

<label class="events__label events__label--half" for="category">Category
    <select class="events__input" name="category_id" id="category">

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

</select></label>


    {{-- PAID EVENT? --}}
    <div class="events__radio">
    <label class="events__label">Paid event? *</label>
    <input
    class="events__input--radio"
        id="paid_yes"  
        type="radio"
        name="is_paid"
        value="1"
        required
  
        @if ($event->id && $event->is_paid === 1)
          checked
        @endif
  
  
    ><label class="events__label events__label--radio" for="paid_yes">Yes</label>
    
    <input
    class="events__input--radio"
        id="paid_no"  
        type="radio"
        name="is_paid"
        value="0"
        @if ($event->id && $event->is_paid === 0)
          checked
        @elseif (!$event->id)
          checked
        @endif
  
    ><label class="events__label events__label--radio" for="paid_no">No</label>
  </div>
    
    
    {{-- PRICE --}}
    <label class="events__label events__label--half" for="price">Price
    <input
    class="events__input"
        id="price"  
        type="number"
        min="1"
        name="price"
        value="{{ old('price', $event->price) }}"
    ></label>


        {{-- QR code URL --}}
        <label class="events__label events__label--half" for="qr_code_image">QR code URL
        <input
        class="events__input"
            id="qr_code_image"  
            type="text"
            name="qr_code_image"
            value="{{ old('qr_code_image', $event->qr_code_image) }}"
  
        ></label>
    {{-- CAPACITY --}}
    <label class="events__label events__label--half" for="capacity">Capacity
    <input
    class="events__input"
        id="capacity"  
        type="number"
        min="1"
        name="capacity"
        value="{{ old('capacity', $event->capacity) }}"
    ></label>


  {{-- IS PHONE REQUIRED --}}
  <div class="events__radio">
  <label class="events__label">Is the phone required? *</label>
  
  <input
  class="events__input--radio"
      id="phone_yes"  
      type="radio"
      name="is_phone_required"
      value="1"
      
      @if ($event->id && $event->is_phone_required === 1)
        checked
      @endif



  ><label for="phone_yes" class="events__label events__label--radio">Yes</label>
  
  <input
  class="events__input--radio"
      id="phone_no"  
      type="radio"
      name="is_phone_required"
      value="0"
      @if ($event->id && $event->is_phone_required === 0)
        checked
      @elseif (!$event->id)
        checked
      @endif
  ><label for="phone_no" class="events__label events__label--radio">No</label>
  </div>

  {{-- IS RECURRING? --}}

  <div class="events__radio">
  <label class="events__label">Is the event recurring?</label>
  
  <input
  class="events__input--radio"
      id="recurring_yes"  
      type="radio"
      name="is_recurring"
      value="1"
      
      @if ($event->id && $event->is_recurring === 1)
        checked
      @endif
  ><label class="events__label events__label--radio" for="recurring_yes">Yes</label>
  
  <input
  class="events__input--radio"
      id="recurring_no"  
      type="radio"
      name="is_recurring"
      value="0"
      @if ($event->id && $event->is_recurring === 0)
        checked
      @elseif (!$event->id)
        checked
      @endif
  ><label class="events__label events__label--radio" for="recurring_no">No</label></div>

  {{-- IS FEATURED--}}
  <div class="events__radio">
  <label class="events__label">Is the event featured? *</label>
  
  <input
  class="events__input--radio"
      id="featured_yes"  
      type="radio"
      name="is_featured"
      value="1"
      
      @if ($event->id && $event->is_featured === 1)
        checked
      @endif
      {{-- checked={{$event->is_phone_required === 1 ? "true" : "false"}} --}}


  ><label class="events__label events__label--radio" for="featured_yes">Yes</label>
  
  <input
  class="events__input--radio"
      id="featured_no"  
      type="radio"
      name="is_featured"
      value="0"
      @if ($event->id && $event->is_featured === 0)
        checked
      @elseif (!$event->id)
        checked
      @endif
  ><label class="events__label events__label--radio" for="featured_no">No</label>
  </div>

  {{-- IMAGES --}}
  <label class="events__label events__label--half" for="images">Images *
  <select class="events__input"name="image_id" id="images" multiple required>
    
    
  @if ($event->id && $event->images)

  <option disabled="disabled">Select image</option>

  @foreach ($event->images as $image_event)
     @foreach ($images as $image)
        @if ($image->alt === $image_event->alt)
           <option value={{$image->id}} selected>{{$image->alt}}</option>
        @else
           <option value={{$image->id}}>{{$image->alt}}</option>
        @endif
     @endforeach  
  @endforeach


  @else 
     <option selected disabled="disabled">Select image</option>
     @foreach ($images as $image) 
     <option value={{$image->id}}>{{$image->alt}}</option>
    @endforeach  
  @endif

</select></label>





</select></label>


</fieldset>


  @if (Request::path() === "admin/events/" . $event->id . "/edit" || Request::path() === "admin/events")
  <button type="submit">Save</button>
  @endif



</form>


@if (Request::path() === "admin/events/" . $event->id)
<a href="{{route("events.edit", $event->id)}}"><button>Edit</button></a>
<a href="{{url()->previous()}}"><button>Back</button></a>
@elseif (Request::path() === "admin/events/" . $event->id . "/edit" || Request::path() === "admin/events/" . $event->id . "/participants")
<a href="{{url()->previous()}}"><button>Back</button></a>
@endif










@if ($event->id)
<form action="{{route("events.destroy", $event->id)}}" method="POST">
  @method("DELETE")
  @csrf

  <button type="submit">Delete</button>
</form>

{{-- <form action="{{route("events.destroy", $event->id)}}" method="POST">
  @method("DELETE")
  @csrf

  <button type="submit">Delete</button>
</form> --}}

<a href="{{route("events.display", $event->id)}}"><button>See participants</button></a>
 
    @if (isset($registrations))
    {{-- @dump($registrations) --}}
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
        </tr>
        @foreach ($registrations as $registration)
        <tr>
          <td>{{$registration->contact->name}}</td>
          <td>{{$registration->contact->email}}</td>
        </tr>
       @endforeach
      </table>


    @endif



@endif