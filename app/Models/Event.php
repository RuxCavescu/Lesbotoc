<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Image;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Registration;
use Carbon\Carbon;
use DB;

class Event extends Model
{

    use HasFactory;

    public $fillable = ['title_cz', 'title_en', 'start_date', 'time', 'end_date', 'location_id', 'category_id', "is_paid", "price", "capacity", "qr_code_image", "description_cz", "description_en", "instructions_cz", "instructions_en", "is_phone_required", "is_recurring", "is_featured", "is_active"];

    public function location()
    {
      return $this->belongsTo(Location::class);
    }

    public function image()
    {
      return $this->belongsTo(Image::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }


    public function registrations()
    {
      return $this->hasMany(Registration::class);
    }

    public function contacts()
    {
      return $this->hasMany(Contact::class);
    }

    // public function setIsActive()
    // {
    //   $this->is_active = $this->start_date > Carbon::now();
    // }


    
}
