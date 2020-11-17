<?php
// Namespaces
namespace App;

// Imports
use Illuminate\Database\Eloquent\Model;

/**
 * This model allows you to grab user information
 * and associate it to a strategy.
 */
class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    // Allows the strategy to upload without errors
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class, 'from_user_id');
    }
    // Associates a user to any specific strategy.
    public function strategy() {
        return $this->belongsTo(Strategy::class, 'on_strategy');
    }
}
