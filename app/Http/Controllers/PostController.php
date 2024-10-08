<?php

namespace App\Http\Controllers;

class PostController
{
    public function __invoke()
    {
        $post = [
            ['title' => 'Post 1'],
            ['title' => 'Post 2'],
            ['title' => 'Post 3'],
            ['title' => 'Post 4'],
        ];

        return view('blog', ['posts' => $post]);
    }
}
