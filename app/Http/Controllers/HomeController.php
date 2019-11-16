<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(Config::get('constants.paginate_post.paginate_posts_10'));
        return view('home', [
            'posts' => $posts
        ]);
    }
}
