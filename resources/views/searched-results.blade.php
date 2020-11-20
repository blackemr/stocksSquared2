@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (count($strategies) > 0)
            @foreach ($strategies as $strategy)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-2">
                <div class="card">
                    <div class="card-header"><h1>{{ $strategy->strategy_title }}</h1></div>
                    <div class="card-body">
                        <h2>{{ $strategy->strategy_type }}</h2>
                        <span>{{ $strategy->strategy_content }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
