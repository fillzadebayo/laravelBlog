<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Session;

class BlogController extends Controller
{
    public function getIndex()
    {
        $post = Post::paginate(3);
        return view('blog.index')->with('posts',$post);
    }

    public function getSingle($slug)
    {
      $post = Post::where('slug', '=', $slug)->first();
      return view('blog.single')->with('post',$post);

    }

}
