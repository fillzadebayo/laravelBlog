<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::orderBy('id','desc')->paginate(3);
      return view('post.index')->with('posts',$posts);
    }
      public function __construct()
      {
          $this->middleware('auth');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'title'=>'required|max:255',
          'body'=>'required',
          'category'=>'required',
          'slug'=>'required|min:5|max:255|unique:posts,slug'

        ));
        $post = new Post;
        $post->title=$request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->category_id = $request->category;
        $post->save();
        Session::flash('success', 'The Post was succesfully saved!');

        return redirect()->route('post.show',$post->id);

    }
     /*
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
        return view('post.show')->with('post', $post);
    }
/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $cats= array();
        foreach ($categories as $category) {
          $cats[$category->id]=$category->name;

        }
        return view('post.edit')->with('post',$post)->withCategories($cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($request->input('slug')==$post->slug) {
        $this->validate($request, array(
          'title'=>'required|max:255',
          'body'=>'required',
          'category'=>'required'
        ));
      }else{
        $this->validate($request, array(
          'title'=>'required|max:255',
          'body'=>'required',
          'slug'=>'required|unique:posts,slug',
          'category'=>'required'

        ));
      }

        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->body = $request->input('body');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category');
        $post->save();
        Session::flash('success', 'The Post was succesfully Edited!');

        return redirect()->route('post.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      Session::flash('success', 'The Post was succesfully deleted!');
      return redirect()->route('post.index');
    }
}
