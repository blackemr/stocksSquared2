<?php

namespace App\Http\Controllers;

use App\Strategy;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'query'=>'required',
        ]);

        $query = $request->input('query');
        $strategies = Strategy::where('strategy_title','like', "%$query%")->paginate(6);
        return view('/searched-results', compact('strategies'));
    }

}
