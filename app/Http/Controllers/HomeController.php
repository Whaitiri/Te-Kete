<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); <--- makes Home page require auth
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
     return view('home');
   }

   public function community()
   {
      $posts = Post::where('type', 0)->where('status', 1)->orderBy('created_at','DESC')->get();
      $users = User::with('post')->get();
      return view('tekete.community', compact('users'))->withPosts($posts);
   }

   public function work()
   {
      $posts = Post::where('type', 1)->where('status', 1)->orderBy('created_at','DESC')->get();
      $users = User::with('post')->get();
      return view('tekete.work', compact('users'))->withPosts($posts);
   }
}
