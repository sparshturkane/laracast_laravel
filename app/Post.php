<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    public function comments()
    {
        // return $this->hasMany(Comment::class);
        return $this->hasMany('App\Comment');
    }

    public function addComment($body){
        // $this->comments() //all the comments related to this Post
        // $this->comments()->create()  // we only give body but still it will set up the id of post because of the relation ship
        $this->comments()->create(compact('body'));
        // Comment::create([
        //     'body'=>$body,
        //     'post_id' => $this->id,
        // ]);
    }
}
