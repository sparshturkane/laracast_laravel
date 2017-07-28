
<h2>
    <a href="/posts/{{$post->id}}">
        {{$post->title}}
    </a>
</h2>
<h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, {{$post->created_at->toFormattedDateString()}}.</h5>
<h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
<p>
    {{$post->body}}
</p>
<hr>
