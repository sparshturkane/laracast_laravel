@extends('layouts/master')

@section('contents')
    @include('posts/post')
    <h4>Leave a Comment:</h4>
    <form role="form">
        <div class="form-group">
            <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="button" class="btn btn-success">Submit</button>
    </form>
    <br><br>
    <p><span class="badge">2</span> Comments:</p><br>
    @foreach ($post->comments as $comment)
        <div class="row">
            <div class="col-sm-2 text-center">
                <img src="https://d28idop5uo5klu.cloudfront.net/comfy/cms/files/files/000/000/089/original/placeholder.png" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-sm-10">
                <h4>username <small>{{$comment->created_at->toFormattedDateString()}}</small></h4>
                <p>
                    {{$comment->body}}
                </p>
                <br>
            </div>
        </div>
    @endforeach

    {{-- @foreach ($post->comments as $comment)
    <p>{{$comment->body}}</p>
@endforeach --}}

@endsection
