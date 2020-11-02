<?php
// Namespaces
namespace App\Http\Controllers;

// Imports
use App\User;
use Illuminate\Http\Request;

/**
 * This controller contains the logic for a user profile.
 */
class ProfilesController extends Controller
{
    /**
     * Show a specific user dashboard. Returns a 404 page
     * if the user cannot be found.
     * @var $user - allows the program to retrieve user information.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles/index', [
            'user' => $user,
        ]);
    }
}
