<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    //
    public function __construct()
   {
     $this->middleware('auth', ['only' => 'create']);
   }
   
    public function index(){

      $posts = Post::all();

      return view('posts.index', compact('posts'));
    }

    public function show($id){
      $post = Post::findOrFail($id);
      // $user = Auth::user()->name;
      // $usr = Auth::user();
      return view('posts.show', compact('post'));
    }

    public function create(){
      return view('posts.create');
    }

    public function postPost() {
      $input = Request::all();
      // $post = new Post;
      // $post->title = $input['title'];
      // Post::create($input);
      $input['user_id'] = 1;
      Post::create($input);
      return redirect('posts');
    }
}
