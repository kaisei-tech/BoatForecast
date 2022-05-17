<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;

    public function course() {	 	 
        return $this->hasOne(Course::class);	 	 
    }

    public function patterns() {
        return $this->hasMany(Pattern::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


}
