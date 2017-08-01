<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\createPostFormRequest;
use Carbon\Carbon;
class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()
                ->filter(request(['month','year']))
                ->get();
        // if($month = request('month')){
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }
        //
        // if($year = request('year')){
        //     $posts->whereYear('created_at', $year);
        // }
        //
        // $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) as year,monthname(created_at) as month,count(*) published')
                            ->groupBy('year','month')
                            ->orderByRaw('min(created_at) desc')
                            ->get()
                            ->toArray();

        return view('posts/index', compact('posts', 'archives'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(createPostFormRequest $request)
    {
        // Post::create(
        //     request([
        //         'title',
        //         'body',
        //         'user_id'
        //     ])
        // );
        //
        // $user = ['title' => request('title'),
        // 'body' => request('body'),
        // 'user_id' => auth()->id()];
        // dd($user);
        Post::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => request('body'),

        ]);
        return redirect()->back()->with('status', 'Your post has been created!');
    }

    public function show(Post $post)
    {
        // $post = Post::find($id);
        return view('posts/show', compact('post'));
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
