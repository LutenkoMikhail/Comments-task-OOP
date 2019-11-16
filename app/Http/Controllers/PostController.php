<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $comments = $post->comments->sortByDesc('created_at')->groupBy('parent_id')->first();
        return view('post.show', [
            'comments' => $comments,
            'post' => $post
        ]);
    }

    public function create(Post $post)
    {
        dd($post);
    }
}
