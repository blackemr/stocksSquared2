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
                    <label for="strategy-title" class="col-md-4 col-form-label">Strategy Title</label>

                    <div class="col-md-6">
                        <input id="strategy-title" type="text" class="form-control @error('strategy-title') is-invalid @enderror" name="strategy-title"
                            value="{{ old('strategy-title') }}" required autocomplete="strategy-title" autofocus>

                        @error('strategy-title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="strategy-type" class="col-md-4 col-form-label">Strategy Type</label>

                    <div class="col-md-6">
                        <input name="strategy-type" type="radio" value="Day"><span> &nbsp; Day</span><br>
                        <input name="strategy-type" type="radio" value="Position"><span> &nbsp; Position</span><br>
                        <input name="strategy-type" type="radio" value="Swing"><span> &nbsp; Swing</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="strategy-info">Strategy Information</label>
                    <textarea class="form-control" id="strategy-info" name="strategy-info" rows="3"></textarea>
                </div>

                <div class="row mt-4">
                    <button class="btn btn-success">Add New Strategy</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
