<?php

// Namespaces
namespace App\Http\Controllers;

// Imports
use App\Strategy;
use App\User;
use DB;
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
        $strategies = DB::select('select strategy_title, id from strategies');
        return view('comment.create', ['strategies' => $strategies]);
    }

    /**
     * This function allows the user to store an individual
     * strategy.
     */
    public function store() {
        // Validation for the request coming from the form.
        $data = request()->validate([
            'comment' => 'required',
            'on_strategy' => 'required',
        ]);
        // Associate the user to the comments.
        auth()->user()->comments()->create([
            'comment' => $data['comment'],
            'on_strategy' => $data['on_strategy'],
        ]);
        // Redirect the user to their profile.
        return redirect('/profile/' . auth()->user()->id);
    }

    public function list($comments) {
        echo $comments;
    }

}
