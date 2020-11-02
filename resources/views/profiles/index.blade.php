@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ $user->name }} (Studies {{ $user->profile->major ?? 'Stonks' }} @ {{ $user->profile->college ?? 'Stonk University' }})</div>

                <div class="card-body">
                    <a href="/strategy/create" class="btn btn-success">Add New Strategy</a><br/>
                    <div class="row">
                        @foreach($user->strategies as $strategy)
                            <div class="col-6">
                                <img src="/storage/{{ $strategy->image }}" class="w-100"/>
                                <h1>{{ $strategy->strategy_title }}</h1>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
