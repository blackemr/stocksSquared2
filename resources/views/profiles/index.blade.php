@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ $user->name }} (Studies {{ $user->profile->major ?? 'Stonks' }} @ {{ $user->profile->college ?? 'Stonk University' }})</div>

                <div class="card-body">
                    <a href="#" class="btn btn-success">Add New Strategy</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
