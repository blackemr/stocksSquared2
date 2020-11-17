<?php

// Namespaces
namespace App\Http\Controllers;

// Imports
use App\Strategy;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * This class contains the logic for the strategies on our site.
 */
class CommentController extends Controller
{
    /**
     * Constructor that requires the user to be
     * logged into the system before they can see
     * this page.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Create function that returns a view
     * that can be found in the /resources/views/strategy
     * folder.
     */
    public function create() {
        return view('comment.create');
    }

    /**
     * This function allows the user to store an individual
     * strategy.
     */
    public function store() {
        // Validation for the request coming from the form.
        $data = request()->validate([
            'comment' => 'required',
        ]);
        // Associate the user to the comments.
        auth()->user()->comments()->create([
            'on_strategy' => 2,
            'comment' => $data['comment'],
        ]);
        // Redirect the user to their profile.
        return redirect('/profile/' . auth()->user()->id);
    }

    public function list($comments) {
        echo $comments;
    }

}
