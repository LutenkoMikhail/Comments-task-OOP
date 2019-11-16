<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id', 'post_id', 'parent_id',
        'user_name', 'user_email', 'user_url',
        'user_ip', 'user_browser', 'user_file', 'text'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
