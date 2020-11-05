<?php

// Namespaces
namespace App\Http\Controllers;

// Imports
use App\Strategy;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * This class contains the logic for the strategies on our site.
 */
class StrategyController extends Controller
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
        return view('strategy.create');
    }

    /**
     * @ToDo
     * This function allows the user to store an individual
     * strategy.
     */
    public function store() {
        // Validation for the request coming from the form.
        $data = request()->validate([
            'strategy-title' => 'required',
            'strategy-type' => 'required',
            'strategy-info' => 'required',
        ]);
        // Associate the user to the strategy.
        auth()->user()->strategies()->create([
            'strategy_title' => $data['strategy-title'],
            'strategy_type' => $data['strategy-type'],
            'strategy_content' => $data['strategy-info'],
        ]);
        // Redirect the user to their profile.
        return redirect('/profile/' . auth()->user()->id);
    }
}
