@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/comment" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Comment</h1>
                </div>

                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>

                <div class="row mt-4">
                    <button class="btn btn-success">Add New Comment</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
