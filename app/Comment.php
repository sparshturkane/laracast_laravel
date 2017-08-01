<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id', 'body', 'user_id'
    ];
    public function posts()
    {
        return $this->belongsTo('App\Post') ;
    }

    public function user() // $comment->user->name;
    {
        return $this->belongsTo('App\User') ;
    }
}
