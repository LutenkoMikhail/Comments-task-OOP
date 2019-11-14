<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    protected $paginate;


    public function __construct()
    {
        $this->paginate = Config::get('constants.paginate_post.paginate_posts_10');

    }

    public function index()
    {
        $posts = Post::paginate($this->paginate);
        return view('home', [
            'posts' => $posts
        ]);
    }
}
