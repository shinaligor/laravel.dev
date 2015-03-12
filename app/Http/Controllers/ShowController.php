<?php namespace App\Http\Controllers;

use App\Post;


class ShowController extends Controller
{
    public function getPost($id)
    {
        $id = (int)$id;
        $post = Post::get($id);
        if ($post instanceof Exeption)
        {
            return 'error';
        }
        else
        {
            //dd($post);
         return view('show')->with('post', $post);
        }
    }
}