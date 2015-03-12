<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';

    public static $unguarded = true;

    public static function getAll()
    {
        $posts = Post::all();

        return $posts;
    }


    public static function get($id)
    {
        try {
            $post = Post::where('id', '=', $id)->firstOrFail();
        } catch (Exeption $e) {
            return $e;
        }

        return $post;
    }


    public static function add($data)

    {
        try {
            $post = Post::create([

                'title' => $data['title'],

                'body' => $data['body'],

                'author' => 'Author'
            ]);
        } catch (Exeption $e) {
            return $e;
        }

        return $post;
    }
}