<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable dan guarded sama saja
    //$fillable = ['title', 'author', 'excerpt', 'body'];
    protected $guarded = ['id'];
}
