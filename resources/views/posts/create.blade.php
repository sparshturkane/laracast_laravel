@extends('layouts/master')
@section('contents')
    <h1>Create Post</h1>
    <hr>
    @include('posts/error')
    @include('posts/status')
    <form method="post" action="/posts">
         {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" class="form-control" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
