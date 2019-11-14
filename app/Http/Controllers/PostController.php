<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        dd($post);
//        $categories = $product->category()->get();
//        return view('products.show', [
//            'categories' => $categories,
//            'product' => $product
//        ]);
    }
}
