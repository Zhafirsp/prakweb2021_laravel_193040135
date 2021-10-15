<?php

namespace App\Models;

// untuk terhubung ke DB
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
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
        ]
    ];

    public static function all()
    {
        // untuk property static menggunakan self. untuk property biasa menggunakan this 
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
