<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Post;
use App\User;
use App\SlugCreator;
use DB;
use Route;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::paginate(10);
      $users = User::all();

      return view('admin.posts.index')->withPosts($posts)->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users = User::all();
      return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
      //   $this->validate($request, [
      //      'title' => 'required|max:255',
      //      'slug' => 'required|max:255|unique:posts',
      //      'subtitle' => 'required|max:255',
      //      'content' => 'required',
      //

         $post = new Post();
         $post->title = $request->title;
         $post->slug = SlugCreator::createSlug($request);
         $post->author_id = $request->author_id;
         $post->subtitle = $request->subtitle;
         $post->content = $request->content;

         // $post->status = $request->status;
         if ($request->status == 'on') {
            $post->status = 1;
         } else {
            $post->status = 0;
         }
         $post->type = $request->type;
         $post->comment_count = $request->comment_count;

         $post->save();


        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::where('id', "=", $id)->firstOrFail();
      $user = DB::table('users')->where('id', $post->author_id)->first();
      return view("admin.posts.show")->withPost($post)->withUser($user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("admin.posts.edit")->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.show', $id);
    }

    public function getRouteKeyName()
   {
      return 'slug';
   }

    public function slugPage(Post $posts)
   {
      $currentSlug = Route::current()->slug;
   	$post = Post::where('slug', '=', $currentSlug)->first();
      if ($post) {
         $user = User::where('id', '=', $post->author_id)->first();
      	return view("layouts.post")->withPost($post)->withUser($user);
      } else {
         abort(404);
      }

   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post->delete();

      //redirect
      Session::flash('message', 'Deleted post successfully');
      return redirect()->route('posts.index');
    }
}
