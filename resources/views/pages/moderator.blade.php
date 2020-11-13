@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Strategy Title</th>
                                <th scope="col">Strategy Type</th>
                                <th scope="col">Strategy Description</th>
                                <th scope="col">Admin Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($strategies as $strategy)
                            <tr>
                                <td>{{ $strategy->strategy_title }}</td>
                                <td>{{ $strategy->strategy_type }}</td>
                                <td>{{ $strategy->strategy_content }}</td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
