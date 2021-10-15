<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_phpmvc_193040135
Pertemuan 6 - 15 Oktover 2021
Mempelajari tentang Post model pada belajar laravel 8 Episode 7
*/
?>


<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Zhafir",
        "email" => "193040135.muhammad@mail.unpas.ac.id",
        "image" => "Profile.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

// mengarah ke single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// mengarah ke categories
Route::get('/categories', function (Category $category) {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// mengarah ke kategori
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
