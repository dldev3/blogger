<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
      $posts = Post::paginate(5); //returning all posts
      return view('posts.index', [
        'posts' => $posts
      ]);
    }

    public function store(Request $request){
      $this->validate($request, [
        'body' => 'required'
      ]);

      $request->user()->posts()->create([
        //laravel automatically takes the user_id
        'body' => $request->body
      ]);

      return back();

    }
}
