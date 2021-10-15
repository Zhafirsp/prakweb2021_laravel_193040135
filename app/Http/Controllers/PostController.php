<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_laravel_193040135.git
Pertemuan 6 - 15 October 2021
Merapihkan  Struktur folder dan mempelajari tentang Model, Collection & Controller
*/
?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
