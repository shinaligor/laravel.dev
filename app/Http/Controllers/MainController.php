<?php namespace App\Http\Controllers;

use App\Post;

class MainController extends Controller
{
    public function index ()
    {
        $posts = Post::getAll();

        return view('main')->with('posts', $posts);
    }
}