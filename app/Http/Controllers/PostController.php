<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginate()]);  
    }
    
    public function show(Post $post)
    {
    return view('posts/show')->with(['post' => $post]);
    }
}
