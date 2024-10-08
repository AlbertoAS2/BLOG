<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class PostController extends Controller
{
    public function index()
    {
        $post = DB::table(table: 'posts')-> get();

        return view('blog', compact(var_name: 'post'));
    }
}
