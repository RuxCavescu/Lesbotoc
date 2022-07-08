<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Image;
use App\Models\Category;
use App\Models\Registration;

class Event extends Model
{
    use HasFactory;

    public function location()
    {
      return $this->hasOne(Location::class);
    }

    public function images()
    {
      return $this->belongsToMany(Image::class);
    }

    public function category()
    {
      return $this->hasOne(Category::class);
    }


    public function registrations()
    {
      return $this->hasMany(Category::class);
    }


}
