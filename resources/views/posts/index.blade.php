@extends('layouts/master')

@section('contents')
    <h4><small>RECENT POSTS</small></h4>
    <hr>
    @foreach ($posts as $post)
        @include('posts/post')
    @endforeach

@endsection
