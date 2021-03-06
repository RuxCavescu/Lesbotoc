<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use App\Models\Event;

class Registration extends Model
{
    use HasFactory;

    public function contact() {
        return $this->belongsTo(Contact::class);
    }

    public function event()
    {
      return $this->belongsTo(Event::class);
    }
}
