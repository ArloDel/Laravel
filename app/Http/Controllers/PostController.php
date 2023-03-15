<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('Posts', [


            'title' => 'Posts',
            'posts' => Post::getAll()
        ]);
    }


    public function show($slug)
    {
        return view(
            'post',
            [
                'title' => 'Single Posts',
                'post' => Post::find($slug)
            ]
        );
    }
}
