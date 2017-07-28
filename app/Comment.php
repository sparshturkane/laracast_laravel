<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id', 'body'
    ];
    public function posts()
    {
        return $this->belongsTo('App\Post') ;
    }
}
