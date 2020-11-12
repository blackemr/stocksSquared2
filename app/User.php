<?php
// Namespaces
namespace App;

// Imports
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * This model is authenticatable which means that
 * a verification route can be established.
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array [name, email, username, password]
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array [password, remember_token]
     */
    protected $hidden = [
        'password', 'remember_token', 'id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_admin() {
        if ($this->admin) {
            return true;
        }
        return false;
    }

    public function get_id() {
        return $this->user_id;
    }

    /**
     * This function allows the program to create
     * a one to many relationship for users and
     * strategies.
     */
    public function strategies() {
        // Create a one to many relationship
        return $this->hasMany(Strategy::class)->orderBy('created_at', 'DESC');
    }

    /**
     * This function allows the program to create
     * a one to many relationship for users and
     * profiles.
     */
    public function profile() {
        // Create a one to one relationship
        return $this->hasOne(Profile::class);
    }

}
