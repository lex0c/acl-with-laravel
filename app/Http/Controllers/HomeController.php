<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Gate;

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
            'posts' => $post->paginate(5) //where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function update($id)
    {
        $post = Post::find($id);
        //$this->authorize('who-see', $post);

        if(Gate::denies('who-see', $post))
            abort(403, 'This action is unauthorized!');

        return view('update-post', [
            'post' => $post
        ]);
    }

    public function rolesPermissions()
    {
        $username = auth()->user()->name;
        echo "<h1>{$username}</h1>";
        
        echo '<br>';

        foreach(auth()->user()->roles as $role) {
            echo $role->name;
        }

        echo '<br>';

        foreach(auth()->user()->roles as $role) {
            echo $role->name;
            echo '<br>';
            foreach($role->permissions as $permission) {
                echo $permission->name;
                echo '<br>';
            }

        }
    }

}
