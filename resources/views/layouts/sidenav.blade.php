<div class="col-sm-3 sidenav">
    @if (auth()->check())
        <h4>{{auth()->user()->name}}</h4>
    @else
        <h4>Blog</h4>
    @endif

    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/posts/create">Create</a></li>
        {{-- <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li> --}}
    </ul><br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search">

                </span>
            </button>
        </span>
    </div>
</div>
