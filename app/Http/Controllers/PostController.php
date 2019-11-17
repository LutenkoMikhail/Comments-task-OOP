<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentsCreateRequest;
use App\Post;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $comments = $post->comments()
            ->orderBy('created_at', 'desc')
            ->paginate(Config::get('constants.paginate_comment.paginate_comments_25'));
        return view('post.show', [
            'comments' => $comments,
            'post' => $post
        ]);
    }
}
