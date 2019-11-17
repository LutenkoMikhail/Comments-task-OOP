<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentsCreateRequest;
use App\Post;

class CommentController extends Controller
{
    public function create(Post $post)
    {
        return view('comment.create', [
            'postId' => $post->id
        ]);
    }

    public function store(CommentsCreateRequest $request)
    {
        $pathFile = '';
        if ($request->hasFile('loadfile')) {
            $pathFile = $request->file('loadfile')->store("/comments/files/", 'public');
        }
        $comment = new Comment();
        $comment->post_id = $request->postId;
        $comment->user_name = $request->name;
        $comment->user_email = $request->email;
        $comment->user_url = $request->homepage;
        $comment->user_ip = $request->ip();
        $comment->user_browser = $request->header('User-Agent');
        $comment->user_file = $pathFile;
        $comment->text = $request->comment;
        if ($comment->save()) {
            return redirect()->route('post.show', ['id' => $request->postId]);
        }
        return redirect()->back();
    }
}
