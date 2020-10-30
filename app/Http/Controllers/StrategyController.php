<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrategyController extends Controller
{
    public function create() {
        return view('strategy.create');
    }
    public function store() {
        $data = request()->validate([
            'strategy_title' => 'required',
            'image' => ['required', 'image'],
            'user_id' => auth()->id
        ]);
        
        auth()->user()->strategies()->create($data);

        \App\Strategy::create($data);
        dd(request()->all());
    }
}
