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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view('home', [
            'posts' => $post->where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function update($id)
    {
        $post = Post::find($id);
        $this->authorize('update-post', $post);

        return view('update-post', [
            'post' => $post
        ]);
    }

}
