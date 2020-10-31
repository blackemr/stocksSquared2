<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function strategies() {
        // Create a one to many relationship
        return $this->hasMany(Strategy::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
