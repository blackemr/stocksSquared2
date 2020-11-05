@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="ml-5 mt-3">Welcome {{ $user->name }} (Studies {{ $user->profile->major ?? 'Stonks' }} @ {{ $user->profile->college ?? 'Stonk University' }})</div>
    <div class="text-center"><a href="/strategy/create" class="btn btn-success">Add New Strategy</a></div><br/>

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
