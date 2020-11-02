<?php
// Namespaces
namespace App;

// Imports
use Illuminate\Database\Eloquent\Model;

/**
 * This model designates that a user belongs
 * to a profile.
 */
class Profile extends Model
{
    /**
     * Allows the model to have a user associated
     * with any specific profile.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
