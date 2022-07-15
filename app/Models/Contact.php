<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;
use App\Models\Message;

class Contact extends Model
{
    use HasFactory;

    public function registrations() {
        return $this->hasMany(Registration::class);
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }
}
