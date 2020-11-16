@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="ml-5 mt-3">Welcome {{ $user->name }} (Studies {{ $user->profile->major ?? 'Stonks' }} @ {{ $user->profile->college ?? 'Stonk University' }})</div>
    <div class="text-center"><a href="/strategy/create" class="btn btn-success">Add New Strategy</a></div><br/>
    <div class="text-center">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="nofilter" checked>
            <label class="form-check-label" for="inlineRadio1">No Filtering</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="dtonly">
            <label class="form-check-label" for="inlineRadio2">Day Trade Strategies Only</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="ptonly">
            <label class="form-check-label" for="inlineRadio3">Position Trade Strategies Only</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="stonly">
            <label class="form-check-label" for="inlineRadio4">Swing Trade Strategies Only</label>
        </div>
        <button type="button" onclick="displayRadioValue()">
            Submit
        </button>
    </div>

    <div class="row justify-content-center">
        @foreach($user->strategies as $strategy)
            <div class="col-4 mt-2">
                <div class="card">
                    <div class="card-header"><h1>{{ $strategy->strategy_title }}</h1></div>
                    <div class="card-body">
                        <h2>{{ $strategy->strategy_type }}</h2>
                        <span>{{ $strategy->strategy_content }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
