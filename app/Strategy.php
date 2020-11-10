<?php
// Namespaces
namespace App;

// Imports
use Illuminate\Database\Eloquent\Model;

/**
 * This model allows you to grab user information
 * and associate it to a strategy.
 */
class Strategy extends Model
{
    protected $table = 'strategies';
    protected $primaryKey ='user_id';
    // Allows the strategy to upload without errors
    protected $guarded = [];
    // Associates a user to any specific strategy.
    public function user() {
        return $this->belongsTo(User::class);
    }
}
