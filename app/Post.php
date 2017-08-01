<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id'
    ];

    public function comments()
    {
        // return $this->hasMany(Comment::class);
        return $this->hasMany('App\Comment');
    }

    public function user() //$post->user or $comment->post->user
    {
        return $this->belongsTo('App\User');
    }

    public function addComment($body)
    {
        // $this->comments() //all the comments related to this Post
        // $this->comments()->create()  // we only give body but still it will set up the id of post because of the relation ship
        $this->comments()->create(compact('body'));
        // Comment::create([
        //     'body'=>$body,
        //     'post_id' => $this->id,
        // ]);
    }

    public function scopeFilter($query, $filters)
    {
        if($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
    }
}
