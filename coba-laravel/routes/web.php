<?php

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


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Rembulan Dibawah Bintang",
            "slug" => "Rembulan-Dibawah-Bintang",
            "author" => "Mariana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae alias dignissimos perferendis voluptas adipisci explicabo iure architecto minima est quibusdam veniam, atque fugit illum, quia aliquam ex ipsam, harum a cupiditate libero. Architecto voluptas molestias at explicabo. Nihil doloremque quae cumque eos doloribus, provident suscipit repellat dolores harum autem numquam aliquid vel quibusdam magni cum placeat laboriosam ex laudantium optio neque iusto! Quod doloremque omnis a dicta assumenda recusandae aperiam vero, architecto dolor quos iste maiores quaerat! Impedit illo corporis nihil dignissimos commodi, aliquam incidunt rerum harum a eum, culpa, neque ducimus nostrum at repellat perspiciatis quasi sint fugiat doloribus."
        ],
        [
            "title" => "Dan Saat Kita Bersama",
            "slug" => "Dan-Saat-Kita-Bersama",
            "author" => "Babilyone",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae alias dignissimos perferendis voluptas adipisci explicabo iure architecto minima est quibusdam veniam, atque fugit illum, quia aliquam ex ipsam, harum a cupiditate libero. Architecto voluptas molestias at explicabo. Nihil doloremque quae cumque eos doloribus, provident suscipit repellat dolores harum autem numquam aliquid vel quibusdam magni cum placeat laboriosam ex laudantium optio neque iusto! Quod doloremque omnis a dicta assumenda recusandae aperiam vero, architecto dolor quos iste maiores quaerat! Impedit illo corporis nihil dignissimos commodi, aliquam incidunt rerum harum a eum, culpa, neque ducimus nostrum at repellat perspiciatis quasi sint fugiat doloribus."
        ],
    ];


    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Rembulan Dibawah Bintang",
            "slug" => "Rembulan-Dibawah-Bintang",
            "author" => "Mariana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae alias dignissimos perferendis voluptas adipisci explicabo iure architecto minima est quibusdam veniam, atque fugit illum, quia aliquam ex ipsam, harum a cupiditate libero. Architecto voluptas molestias at explicabo. Nihil doloremque quae cumque eos doloribus, provident suscipit repellat dolores harum autem numquam aliquid vel quibusdam magni cum placeat laboriosam ex laudantium optio neque iusto! Quod doloremque omnis a dicta assumenda recusandae aperiam vero, architecto dolor quos iste maiores quaerat! Impedit illo corporis nihil dignissimos commodi, aliquam incidunt rerum harum a eum, culpa, neque ducimus nostrum at repellat perspiciatis quasi sint fugiat doloribus."
        ],
        [
            "title" => "Dan Saat Kita Bersama",
            "slug" => "Dan-Saat-Kita-Bersama",
            "author" => "Babilyone",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae alias dignissimos perferendis voluptas adipisci explicabo iure architecto minima est quibusdam veniam, atque fugit illum, quia aliquam ex ipsam, harum a cupiditate libero. Architecto voluptas molestias at explicabo. Nihil doloremque quae cumque eos doloribus, provident suscipit repellat dolores harum autem numquam aliquid vel quibusdam magni cum placeat laboriosam ex laudantium optio neque iusto! Quod doloremque omnis a dicta assumenda recusandae aperiam vero, architecto dolor quos iste maiores quaerat! Impedit illo corporis nihil dignissimos commodi, aliquam incidunt rerum harum a eum, culpa, neque ducimus nostrum at repellat perspiciatis quasi sint fugiat doloribus."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
