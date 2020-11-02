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
            'strategy_title' => 'required',
            'image' => ['required', 'image'],
        ]);
        // File storage
        $file = request()->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        Storage::disk('public')->put('filename', $fileName);
        // Associate the user to the strategy.
        auth()->user()->strategies()->create([
            'strategy_title' => $data['strategy_title'],
            'image' => $upload,
        ]);
        // Redirect the user to their profile.
        return redirect('/profile/' . auth()->user()->id);
    }
}
