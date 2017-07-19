<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;


class PagesController extends Controller
{
    public function getIndex()
    {
      $post = Post::orderBy('created_at','desc')->limit(4)->get();
      return view('pages.welcome')->with('posts',$post);

    }
    public function getAbout()
    {
      $first="tope";
      $last="adebayo";
      $full = $first." ".$last;
      $mail= 'temy.adebayor@gmail.com';
      $data=[];
      $data['mail']=$mail;
      $data['full']=$full;
      //return view('pages.about')->with('fullname', $full);
      return view('pages.about')->withData($data);

    }
    public function getContact()
    {
      return view('pages.contact');

    }
}
