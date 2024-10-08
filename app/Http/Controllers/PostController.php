<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $post = [
            ['title' => 'Post 1'],
            ['title' => 'Post 2'],
            ['title' => 'Post 3'],
            ['title' => 'Post 4'],
        ];

        return view('blog', compact(var_name: 'post'));
    }
}
