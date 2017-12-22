<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
      $posts = Post::where('type', 0)->where('status', 1)->get();
      return view('tekete.community')->withPosts($posts);
   }

   public function work()
   {
      $posts = Post::where('type', 1)->where('status', 1)->get();
      return view('tekete.work')->withPosts($posts);
   }

   public function contact()
   {
      return view('tekete.contact');
   }
}
