@extends('layouts/master')
@section('contents')
    <h1>Login</h1>
    <div class="row">
        <div class="col-md-6">
            @include('posts/error')
            <form class="" action="/login" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>

                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
