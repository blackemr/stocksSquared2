@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/strategy" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Strategy</h1>
                </div>
                <div class="form-group row">
                    <label for="strategy_title" class="col-md-4 col-form-label">Strategy Title</label>

                    <div class="col-md-6">
                        <input id="strategy_title" type="text" class="form-control @error('strategy_title') is-invalid @enderror" name="strategy_title"
                            value="{{ old('strategy_title') }}" required autocomplete="strategy_title" autofocus>

                        @error('strategy_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Strategy Banner Image</label>
                    <input type="file" class="form-control-file" id="banner_image" name="image">
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row mt-4">
                    <button class="btn btn-success">Add New Strategy</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
